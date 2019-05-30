<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserCategories Controller
 *
 * @property \App\Model\Table\UserCategoriesTable $UserCategories
 *
 * @method \App\Model\Entity\UserCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $userCategories = $this->paginate($this->UserCategories);

        $this->set(compact('userCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id User Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userCategory = $this->UserCategories->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userCategory', $userCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userCategory = $this->UserCategories->newEntity();
        if ($this->request->is('post')) {
            $userCategory = $this->UserCategories->patchEntity($userCategory, $this->request->getData());
            if ($this->UserCategories->save($userCategory)) {
                $this->Flash->success(__('The user category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user category could not be saved. Please, try again.'));
        }
        $this->set(compact('userCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userCategory = $this->UserCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userCategory = $this->UserCategories->patchEntity($userCategory, $this->request->getData());
            if ($this->UserCategories->save($userCategory)) {
                $this->Flash->success(__('The user category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user category could not be saved. Please, try again.'));
        }
        $this->set(compact('userCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userCategory = $this->UserCategories->get($id);
        if ($this->UserCategories->delete($userCategory)) {
            $this->Flash->success(__('The user category has been deleted.'));
        } else {
            $this->Flash->error(__('The user category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
