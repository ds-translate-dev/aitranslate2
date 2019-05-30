<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ReplyTypes Controller
 *
 * @property \App\Model\Table\ReplyTypesTable $ReplyTypes
 *
 * @method \App\Model\Entity\ReplyType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReplyTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $replyTypes = $this->paginate($this->ReplyTypes);

        $this->set(compact('replyTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Reply Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $replyType = $this->ReplyTypes->get($id, [
            'contain' => ['Receptions']
        ]);

        $this->set('replyType', $replyType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $replyType = $this->ReplyTypes->newEntity();
        if ($this->request->is('post')) {
            $replyType = $this->ReplyTypes->patchEntity($replyType, $this->request->getData());
            if ($this->ReplyTypes->save($replyType)) {
                $this->Flash->success(__('The reply type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reply type could not be saved. Please, try again.'));
        }
        $this->set(compact('replyType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reply Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $replyType = $this->ReplyTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $replyType = $this->ReplyTypes->patchEntity($replyType, $this->request->getData());
            if ($this->ReplyTypes->save($replyType)) {
                $this->Flash->success(__('The reply type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reply type could not be saved. Please, try again.'));
        }
        $this->set(compact('replyType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reply Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $replyType = $this->ReplyTypes->get($id);
        if ($this->ReplyTypes->delete($replyType)) {
            $this->Flash->success(__('The reply type has been deleted.'));
        } else {
            $this->Flash->error(__('The reply type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
