<?php
namespace App\Controller\Component;
use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Google\Cloud\Translate\TranslateClient;

/**
 * Translate component
 */
class TranslateComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    public function translate($trans_data,$lang){
      // put your code.
      //$trans_data翻訳データ
      //$lang翻訳言語
      //Google APIの「プロジェクトID」
      //$projectId = 'ai-translate-dsb';
      $projectId = 'aitranslate-dsb';

      //「Google Cloud Translation API」の「APIキー」
      //$apiKey = 'AIzaSyAUv_g11SNUAFEY-jo1TCcmx6wxAVYMB30';
      $apiKey = 'AIzaSyB5dCDznjvjrgc5zJ9UEKGHVgcemjKv4BI';

      //「TranslateClient」クラスを呼び出し
      $translate = new TranslateClient([
          'projectId' => $projectId,
          'key' => $apiKey,
      ]);

      if(is_array($trans_data)){
            foreach ($trans_data as $file_list) {
            $result[] = $translate->translate($file_list, [
                'target' => $lang,
            ]);
            }
              return $result;
      }else{
        //翻訳開始
        $result = $translate->translate($trans_data, [
            'target' => $lang,
        ]);
        return $result;
      }

aaa

    }

}
