<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="">おりこうAI翻訳β版-<?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
               <li><a target="_self" href="/aitranslate/text-translations/add/">テキスト翻訳</a>
                <li><a target="_self" href="/aitranslate/file-translations/add">ファイル翻訳(6月Open)</a>
                <li><a target="_self" href="＃">OCR翻訳(6月Open）)</a>
                <li><a target="_self" href="＃">ネイティブ翻訳依頼機能(7月Open)</a>
                <li><a target="_self" href="＃">チャレンジ翻訳(8月Open)</a>
            </ul>
        </div>
    </nav>
    <div style="text-align:right">
    翻訳ビジネスセンターの皆様には6月中にβ版の提供を開始する予定です。</br>6月末・7月末にさらに高度なエンジンにチューニングしていきます。</br>8月中旬-9月で検証予定ですが、気づいた点などありましたらお知らせください。
    </div>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
