<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\UploadFilesForm;

class UploadFilesController extends AppController
{
  public function index()
  {
    $fileform = new UploadFilesForm();
    if ($this->request->is('post')) {
      if ($fileform->validate($this->request->data)) {
        //move_uploaded_file($this->request->data['upload_file']['tmp_name'], sprintf('App/storage/',$this->request->data['upload_file']['name']));
        move_uploaded_file($this->request->data['upload_file']['tmp_name'], WWW_ROOT."files/trans_source/".$this->request->data['upload_file']['name']);

      }
    }
    $this->set(compact('fileform'));
  }
}
