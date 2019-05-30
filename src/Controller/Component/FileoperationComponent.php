<?php
namespace App\Controller\Component;
use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Fileoperation component
 */
class FileoperationComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
  public function operation_file($filepass){

  $filetype = filetype (string $filename);
  return $filetype;

  }


  public function operation_csv($val){



  //      $this->viewBuilder()->className('CsvView.Csv');

  }




}
