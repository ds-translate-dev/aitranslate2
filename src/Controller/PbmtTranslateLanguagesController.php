<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PbmtTranslateLanguages Controller
 *
 * @property \App\Model\Table\PbmtTranslateLanguagesTable $PbmtTranslateLanguages
 *
 * @method \App\Model\Entity\PbmtTranslateLanguage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PbmtTranslateLanguagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pbmtTranslateLanguages = $this->paginate($this->PbmtTranslateLanguages);

        $this->set(compact('pbmtTranslateLanguages'));
    }

    /**
     * View method
     *
     * @param string|null $id Pbmt Translate Language id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pbmtTranslateLanguage = $this->PbmtTranslateLanguages->get($id, [
            'contain' => []
        ]);

        $this->set('pbmtTranslateLanguage', $pbmtTranslateLanguage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pbmtTranslateLanguage = $this->PbmtTranslateLanguages->newEntity();
        if ($this->request->is('post')) {
            $pbmtTranslateLanguage = $this->PbmtTranslateLanguages->patchEntity($pbmtTranslateLanguage, $this->request->getData());
            if ($this->PbmtTranslateLanguages->save($pbmtTranslateLanguage)) {
                $this->Flash->success(__('The pbmt translate language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pbmt translate language could not be saved. Please, try again.'));
        }
        $this->set(compact('pbmtTranslateLanguage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pbmt Translate Language id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pbmtTranslateLanguage = $this->PbmtTranslateLanguages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pbmtTranslateLanguage = $this->PbmtTranslateLanguages->patchEntity($pbmtTranslateLanguage, $this->request->getData());
            if ($this->PbmtTranslateLanguages->save($pbmtTranslateLanguage)) {
                $this->Flash->success(__('The pbmt translate language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pbmt translate language could not be saved. Please, try again.'));
        }
        $this->set(compact('pbmtTranslateLanguage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pbmt Translate Language id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pbmtTranslateLanguage = $this->PbmtTranslateLanguages->get($id);
        if ($this->PbmtTranslateLanguages->delete($pbmtTranslateLanguage)) {
            $this->Flash->success(__('The pbmt translate language has been deleted.'));
        } else {
            $this->Flash->error(__('The pbmt translate language could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
