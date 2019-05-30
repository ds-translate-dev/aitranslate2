<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Receptions Controller
 *
 * @property \App\Model\Table\ReceptionsTable $Receptions
 *
 * @method \App\Model\Entity\Reception[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReceptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'OrderTypes', 'ReplyTypes']
        ];
        $receptions = $this->paginate($this->Receptions);

        $this->set(compact('receptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Reception id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reception = $this->Receptions->get($id, [
            'contain' => ['Users', 'OrderTypes', 'ReplyTypes', 'OrderContens', 'ReplyContens']
        ]);

        $this->set('reception', $reception);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reception = $this->Receptions->newEntity();
        if ($this->request->is('post')) {
            $reception = $this->Receptions->patchEntity($reception, $this->request->getData());
            if ($this->Receptions->save($reception)) {
                $this->Flash->success(__('The reception has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reception could not be saved. Please, try again.'));
        }
        $users = $this->Receptions->Users->find('list', ['limit' => 200]);
        $orderTypes = $this->Receptions->OrderTypes->find('list', ['limit' => 200]);
        $replyTypes = $this->Receptions->ReplyTypes->find('list', ['limit' => 200]);
        $this->set(compact('reception', 'users', 'orderTypes', 'replyTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reception id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reception = $this->Receptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reception = $this->Receptions->patchEntity($reception, $this->request->getData());
            if ($this->Receptions->save($reception)) {
                $this->Flash->success(__('The reception has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reception could not be saved. Please, try again.'));
        }
        $users = $this->Receptions->Users->find('list', ['limit' => 200]);
        $orderTypes = $this->Receptions->OrderTypes->find('list', ['limit' => 200]);
        $replyTypes = $this->Receptions->ReplyTypes->find('list', ['limit' => 200]);
        $this->set(compact('reception', 'users', 'orderTypes', 'replyTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reception id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reception = $this->Receptions->get($id);
        if ($this->Receptions->delete($reception)) {
            $this->Flash->success(__('The reception has been deleted.'));
        } else {
            $this->Flash->error(__('The reception could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
