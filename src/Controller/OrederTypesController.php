<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrederTypes Controller
 *
 * @property \App\Model\Table\OrederTypesTable $OrederTypes
 *
 * @method \App\Model\Entity\OrederType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrederTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $orederTypes = $this->paginate($this->OrederTypes);

        $this->set(compact('orederTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Oreder Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orederType = $this->OrederTypes->get($id, [
            'contain' => []
        ]);

        $this->set('orederType', $orederType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orederType = $this->OrederTypes->newEntity();
        if ($this->request->is('post')) {
            $orederType = $this->OrederTypes->patchEntity($orederType, $this->request->getData());
            if ($this->OrederTypes->save($orederType)) {
                $this->Flash->success(__('The oreder type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The oreder type could not be saved. Please, try again.'));
        }
        $this->set(compact('orederType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Oreder Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orederType = $this->OrederTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orederType = $this->OrederTypes->patchEntity($orederType, $this->request->getData());
            if ($this->OrederTypes->save($orederType)) {
                $this->Flash->success(__('The oreder type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The oreder type could not be saved. Please, try again.'));
        }
        $this->set(compact('orederType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Oreder Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orederType = $this->OrederTypes->get($id);
        if ($this->OrederTypes->delete($orederType)) {
            $this->Flash->success(__('The oreder type has been deleted.'));
        } else {
            $this->Flash->error(__('The oreder type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
