<?php
namespace App\Model\Validation;
use Cake\Validation\Validation;

class CustomValidation extends Validation
{
  /**
   * CSVファイルであるか
   * @param $files
   * @return bool
   */
  public static function isCsv($files)
  {
    $ret = true;
    $allows = array("application/vnd.ms-excel", "text/csv");
    $ext = explode($files['name'], '.');
    if (!in_array($files['type'], $allows) || !end($ext)=='csv') {
      $ret = false;
    }
    return $ret;
  }

  /**
   * ファイル容量制限
   * @param $files
   * @return bool
   */
  public static function limitFileSize($files)
  {
    return ($files['size'] < 20000000);
  }
}
