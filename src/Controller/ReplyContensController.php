<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ReplyContens Controller
 *
 * @property \App\Model\Table\ReplyContensTable $ReplyContens
 *
 * @method \App\Model\Entity\ReplyConten[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReplyContensController extends AppController
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
        $replyContens = $this->paginate($this->ReplyContens);

        $this->set(compact('replyContens'));
    }

    /**
     * View method
     *
     * @param string|null $id Reply Conten id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $replyConten = $this->ReplyContens->get($id, [
            'contain' => ['Receptions']
        ]);

        $this->set('replyConten', $replyConten);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $replyConten = $this->ReplyContens->newEntity();
        if ($this->request->is('post')) {
            $replyConten = $this->ReplyContens->patchEntity($replyConten, $this->request->getData());
            if ($this->ReplyContens->save($replyConten)) {
                $this->Flash->success(__('The reply conten has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reply conten could not be saved. Please, try again.'));
        }
        $receptions = $this->ReplyContens->Receptions->find('list', ['limit' => 200]);
        $this->set(compact('replyConten', 'receptions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reply Conten id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $replyConten = $this->ReplyContens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $replyConten = $this->ReplyContens->patchEntity($replyConten, $this->request->getData());
            if ($this->ReplyContens->save($replyConten)) {
                $this->Flash->success(__('The reply conten has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reply conten could not be saved. Please, try again.'));
        }
        $receptions = $this->ReplyContens->Receptions->find('list', ['limit' => 200]);
        $this->set(compact('replyConten', 'receptions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reply Conten id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $replyConten = $this->ReplyContens->get($id);
        if ($this->ReplyContens->delete($replyConten)) {
            $this->Flash->success(__('The reply conten has been deleted.'));
        } else {
            $this->Flash->error(__('The reply conten could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
