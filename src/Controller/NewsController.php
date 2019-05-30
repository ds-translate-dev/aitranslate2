<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use RuntimeException;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 *
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $news = $this->paginate($this->News);

        $this->set(compact('news'));
    }

    /**
     * View method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => []
        ]);

        $this->set('news', $news);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $news = $this->News->newEntity();
        if ($this->request->is('post')) {

            $news = $this->News->patchEntity($news, $this->request->getData());
            $dir = realpath(WWW_ROOT . "/upload_img");
            print_r($dir);
            exit;
                      $limitFileSize = 1024 * 1024;
                      try {
                          $news['file'] = $this->file_upload($this->request->getData(), $dir, $limitFileSize);
                          print_r($news['file']);
                          exit;
                      } catch (RuntimeException $e){
                          $this->Flash->error(__('ファイルのアップロードができませんでした.'));
                          $this->Flash->error(__($e->getMessage()));
                      }


            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $this->set(compact('news'));
    }

    /**
     * Edit method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $news = $this->News->patchEntity($news, $this->request->getData());


            $dir = realpath(WWW_ROOT . "/upload_img");
                      $limitFileSize = 1024 * 1024;
                      try {
                          $news['file'] = $this->file_upload($this->request->data['file_name'], $dir, $limitFileSize);
                      } catch (RuntimeException $e){
                          $this->Flash->error(__('ファイルのアップロードができませんでした.'));
                          $this->Flash->error(__($e->getMessage()));
                      }




            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $this->set(compact('news'));
    }

    /**
     * Delete method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $news = $this->News->get($id);
        if ($this->News->delete($news)) {
            $this->Flash->success(__('The news has been deleted.'));
        } else {
            $this->Flash->error(__('The news could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function file_upload ($file = null,$dir = null, $limitFileSize = 1024 * 1024){
    try {
        // ファイルを保存するフォルダ $dirの値のチェック
        if ($dir){
            if(!file_exists($dir)){
                throw new RuntimeException('指定のディレクトリがありません。');
            }
        } else {
            throw new RuntimeException('ディレクトリの指定がありません。');
        }

        // 未定義、複数ファイル、破損攻撃のいずれかの場合は無効処理
        if (!isset($file['error']) || is_array($file['error'])){
            throw new RuntimeException('Invalid parameters.');
        }

        // エラーのチェック
        switch ($file['error']) {
            case 0:
                break;
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new RuntimeException('No file sent.');
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new RuntimeException('Exceeded filesize limit.');
            default:
                throw new RuntimeException('Unknown errors.');
        }

        // ファイル情報取得
        $fileInfo = new File($file["tmp_name"]);

        // ファイルサイズのチェック
        if ($fileInfo->size() > $limitFileSize) {
            throw new RuntimeException('Exceeded filesize limit.');
        }

        // ファイルタイプのチェックし、拡張子を取得
        if (false === $ext = array_search($fileInfo->mime(),
                                          ['jpg' => 'image/jpeg',
                                           'png' => 'image/png',
                                           'gif' => 'image/gif',],
                                          true)){
            throw new RuntimeException('Invalid file format.');
        }

        // ファイル名の生成
//            $uploadFile = $file["name"] . "." . $ext;
        $uploadFile = sha1_file($file["tmp_name"]) . "." . $ext;

        // ファイルの移動
        if (!@move_uploaded_file($file["tmp_name"], $dir . "/" . $uploadFile)){
            throw new RuntimeException('Failed to move uploaded file.');
        }

        // 処理を抜けたら正常終了
//            echo 'File is uploaded successfully.';

    } catch (RuntimeException $e) {
        throw $e;
    }
    return $uploadFile;
}




}
