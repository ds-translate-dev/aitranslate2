<?php
namespace App\Controller;
use App\Controller\AppController;
use Google\Cloud\Translate\TranslateClient;



/**
 * OrderContents Controller
 *
 * @property \App\Model\Table\OrderContentsTable $OrderContents
 *
 * @method \App\Model\Entity\OrderContent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderContentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function index()
    {
        $this->paginate = [
            'contain' => ['Receptions']
        ];
        $orderContents = $this->paginate($this->OrderContents);

        $this->set(compact('orderContents'));
    }

    /**
     * View method
     *
     * @param string|null $id Order Content id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderContent = $this->OrderContents->get($id, [
            'contain' => ['Receptions']
        ]);

        $this->set('orderContent', $orderContent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderContent = $this->OrderContents->newEntity();
        if ($this->request->is('post')) {
            $orderContent = $this->OrderContents->patchEntity($orderContent, $this->request->getData());
            if ($this->OrderContents->save($orderContent)) {
                $this->Flash->success(__('The order content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order content could not be saved. Please, try again.'));
        }
        $receptions = $this->OrderContents->Receptions->find('list', ['limit' => 200]);
        $this->set(compact('orderContent', 'receptions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Content id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderContent = $this->OrderContents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderContent = $this->OrderContents->patchEntity($orderContent, $this->request->getData());
            if ($this->OrderContents->save($orderContent)) {
                $this->Flash->success(__('The order content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order content could not be saved. Please, try again.'));
        }
        $receptions = $this->OrderContents->Receptions->find('list', ['limit' => 200]);
        $this->set(compact('orderContent', 'receptions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Content id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderContent = $this->OrderContents->get($id);
        if ($this->OrderContents->delete($orderContent)) {
            $this->Flash->success(__('The order content has been deleted.'));
        } else {
            $this->Flash->error(__('The order content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



    //翻訳を実施
    public function translate($id = null)
    {
        print_r($this->request->getData());
        exit;
        $this->loadComponent('Translate');
        $orderContent = $this->OrderContents->get($id, [
            'contain' => ['Receptions']
        ]);
        $result = $this->Translate->translate('ログイン画面','en');
        $orderContent->trans_input = $result['input'];
        $orderContent->trans_result = $result['text'];
        $this->set('orderContent', $orderContent);
    }




}
