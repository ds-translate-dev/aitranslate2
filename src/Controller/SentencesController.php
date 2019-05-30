<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sentences Controller
 *
 * @property \App\Model\Table\SentencesTable $Sentences
 *
 * @method \App\Model\Entity\Sentence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SentencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $sentences = $this->paginate($this->Sentences);

        $this->set(compact('sentences'));
    }

    /**
     * View method
     *
     * @param string|null $id Sentence id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sentence = $this->Sentences->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('sentence', $sentence);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sentence = $this->Sentences->newEntity();
        if ($this->request->is('post')) {
            $sentence = $this->Sentences->patchEntity($sentence, $this->request->getData());
            if ($this->Sentences->save($sentence)) {
                $this->Flash->success(__('The sentence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sentence could not be saved. Please, try again.'));
        }
        $users = $this->Sentences->Users->find('list', ['limit' => 200]);
        $this->set(compact('sentence', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sentence id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sentence = $this->Sentences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sentence = $this->Sentences->patchEntity($sentence, $this->request->getData());
            if ($this->Sentences->save($sentence)) {
                $this->Flash->success(__('The sentence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sentence could not be saved. Please, try again.'));
        }
        $users = $this->Sentences->Users->find('list', ['limit' => 200]);
        $this->set(compact('sentence', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sentence id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sentence = $this->Sentences->get($id);
        if ($this->Sentences->delete($sentence)) {
            $this->Flash->success(__('The sentence has been deleted.'));
        } else {
            $this->Flash->error(__('The sentence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
