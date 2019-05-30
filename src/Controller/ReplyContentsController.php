<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ReplyContents Controller
 *
 * @property \App\Model\Table\ReplyContentsTable $ReplyContents
 *
 * @method \App\Model\Entity\ReplyContent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReplyContentsController extends AppController
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
        $replyContents = $this->paginate($this->ReplyContents);

        $this->set(compact('replyContents'));
    }

    /**
     * View method
     *
     * @param string|null $id Reply Content id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $replyContent = $this->ReplyContents->get($id, [
            'contain' => ['Receptions']
        ]);

        $this->set('replyContent', $replyContent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $replyContent = $this->ReplyContents->newEntity();
        if ($this->request->is('post')) {
            $replyContent = $this->ReplyContents->patchEntity($replyContent, $this->request->getData());
            if ($this->ReplyContents->save($replyContent)) {
                $this->Flash->success(__('The reply content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reply content could not be saved. Please, try again.'));
        }
        $receptions = $this->ReplyContents->Receptions->find('list', ['limit' => 200]);
        $this->set(compact('replyContent', 'receptions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Reply Content id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $replyContent = $this->ReplyContents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $replyContent = $this->ReplyContents->patchEntity($replyContent, $this->request->getData());
            if ($this->ReplyContents->save($replyContent)) {
                $this->Flash->success(__('The reply content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The reply content could not be saved. Please, try again.'));
        }
        $receptions = $this->ReplyContents->Receptions->find('list', ['limit' => 200]);
        $this->set(compact('replyContent', 'receptions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Reply Content id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $replyContent = $this->ReplyContents->get($id);
        if ($this->ReplyContents->delete($replyContent)) {
            $this->Flash->success(__('The reply content has been deleted.'));
        } else {
            $this->Flash->error(__('The reply content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
