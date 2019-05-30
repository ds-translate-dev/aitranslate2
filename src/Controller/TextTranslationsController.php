<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * TextTranslations Controller
 *
 * @property \App\Model\Table\TextTranslationsTable $TextTranslations
 *
 * @method \App\Model\Entity\TextTranslation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TextTranslationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
     public function initialize()
     {
     parent::initialize();
     $this->example = TableRegistry::get('pbmt_translate_languages');
     //$this->example ->find()->select(['language','code'])->all());
     }



    public function index()
    {
        $textTranslations = $this->paginate($this->TextTranslations);
        $this->set(compact('textTranslations'));
    }

    /**
     * View method
     *
     * @param string|null $id Text Translation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $textTranslation = $this->TextTranslations->get($id, [
            'contain' => []
        ]);

        $this->set('textTranslation', $textTranslation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
      //翻訳言語の選択値
      $query = $this->example->find('list', [
          'keyField' => 'code',
          'valueField' => 'language'
      ]);
        $this->set('selectlang',$query->toArray());
        $textTranslation = $this->TextTranslations->newEntity();

        if ($this->request->is('post')) {
            $textTranslation = $this->TextTranslations->patchEntity($textTranslation, $this->request->getData());
            $translate_txt = $this->request->data['input_txt'];
            $translate_code = $this->request->data['code'];

            //////////////////////////////////////////////////////
            //Translateコンポーネント
            //$translate_txt:翻訳内容
            //$translate_code:翻訳先言語コード
            ////////////////////////////////////////////////////////]);
            $this->loadComponent('Translate');
            $result = $this->Translate->translate($translate_txt,$translate_code);
            $textTranslation->output_txt = $result['text'];

            if ($this->TextTranslations->save($textTranslation)) {
                //print_r($textTranslation->id);
                //exit;
                $this->Flash->success(__('The text translation has been saved.'));
                //return $this->redirect(['action' => 'index']);
                //翻訳結果ページへリダイレクト
                return $this->redirect(['action' => 'view',$textTranslation->id]);
            }
            $this->Flash->error(__('The text translation could not be saved. Please, try again.'));
        }
        $this->set(compact('textTranslation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Text Translation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $textTranslation = $this->TextTranslations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $textTranslation = $this->TextTranslations->patchEntity($textTranslation, $this->request->getData());
            if ($this->TextTranslations->save($textTranslation)) {
                $this->Flash->success(__('The text translation has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The text translation could not be saved. Please, try again.'));
        }
        $this->set(compact('textTranslation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Text Translation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $textTranslation = $this->TextTranslations->get($id);
        if ($this->TextTranslations->delete($textTranslation)) {
            $this->Flash->success(__('The text translation has been deleted.'));
        } else {
            $this->Flash->error(__('The text translation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
