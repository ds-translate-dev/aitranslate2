<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Form\UploadFilesForm;
use Cake\ORM\TableRegistry;

/**
 * FileTranslations Controller
 *
 * @property \App\Model\Table\FileTranslationsTable $FileTranslations
 *
 * @method \App\Model\Entity\FileTranslation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FileTranslationsController extends AppController
{
  public function initialize()
  {
  parent::initialize();
  $this->example = TableRegistry::get('pbmt_translate_languages');
  //$this->example ->find()->select(['language','code'])->all());
  }



    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fileTranslations = $this->paginate($this->FileTranslations);

        $this->set(compact('fileTranslations'));
    }

    /**
     * View method
     *
     * @param string|null $id File Translation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fileTranslation = $this->FileTranslations->get($id, [
            'contain' => []
        ]);

        $this->set('fileTranslation', $fileTranslation);
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

      $fileform = new UploadFilesForm();
      $fileTranslation = $this->FileTranslations->newEntity();

      //ファイル保存処理
      if ($this->request->is('post')) {

        //ファイルバリデーション
        if ($fileform->validate($this->request->data)) {

          //print_r($this->request->data['upload_file']['name']);
          //拡張子を取得
          $source_file_name = $this->request->data['upload_file']['name'];
          $ext = substr($source_file_name, strrpos($source_file_name, '.') + 1);

          //ファイルアップロード
          $newfilename = date("YmdHis")."-".$this->request->data['upload_file']['name'];
          move_uploaded_file($this->request->data['upload_file']['tmp_name'], WWW_ROOT."files/trans_source/".$newfilename);


          //ファイルの中身を取得（まだファイルによって処理を分けてないです。CSVのみにしてます。）
          $file = file(WWW_ROOT."files/trans_source/".$newfilename);
          //CSVファイルのエンコード処理
          $file = mb_convert_encoding($file,"utf-8","sjis");
          //

          //文字列を連結する場合
          //$result = "";
          //foreach ($file as $file_list) {
          //$result .= $file_list;
          //}

          $sample = array();
          foreach ($file as $file_list) {
          $result[] = $file_list;
          }


          //FileTranslation-modelオブジェクト取得
          $fileTranslation = $this->FileTranslations->patchEntity($fileTranslation, $this->request->getData());
          //ファイルの内容(原文)をオブジェクトに設定
          $fileTranslation['input_txt']=$result;
          //ファイルパス（原文）をオブジェクトに設定
          $fileTranslation['input_file_pass']=WWW_ROOT."files/trans_source/".$newfilename;


          //////////////////////////////////////////////////////
          //翻訳データを返す処理
          //Translateコンポーネント
          //$translate_txt:翻訳内容
          //$translate_code:翻訳先言語コード
          ////////////////////////////////////////////////////////]);
          $translate_txt = $fileTranslation['input_txt'];
          $translate_code = $this->request->data['code'];
          $this->loadComponent('Translate');
          $result = $this->Translate->translate($translate_txt,$translate_code);
          $fileTranslation->output_txt = $result['text'];


          //$this->loadComponent('Fileoperation');
          //$result = $this->Fileoperation->operation_csv("あいうえお");
          //print_r($result);

          if ($this->FileTranslations->save($fileTranslation)) {
              $this->Flash->success(__('The file translation has been saved.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('The file translation could not be saved. Please, try again.'));
        }
      }
        $this->set(compact('fileTranslation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id File Translation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fileTranslation = $this->FileTranslations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fileTranslation = $this->FileTranslations->patchEntity($fileTranslation, $this->request->getData());
            if ($this->FileTranslations->save($fileTranslation)) {
                $this->Flash->success(__('The file translation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The file translation could not be saved. Please, try again.'));
        }
        $this->set(compact('fileTranslation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id File Translation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fileTranslation = $this->FileTranslations->get($id);
        if ($this->FileTranslations->delete($fileTranslation)) {
            $this->Flash->success(__('The file translation has been deleted.'));
        } else {
            $this->Flash->error(__('The file translation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
