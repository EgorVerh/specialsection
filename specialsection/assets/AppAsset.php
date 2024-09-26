<?php
/*
 * Файл assets/AppAsset.php
 */
namespace frontend\modules\specialsection\assets;
use yii\web\AssetBundle;
use yii\web\View;

class AppAsset extends AssetBundle
{
    public $sourcePath='@module_specialsection_root';
    public $css = [
        'css/styles.css',
    ];  
    public $js = [
        //'/js/form2.js'
    ];
    public $jsOptions = [
        // скрипты будут подключены в <head>
        'position' => View::POS_HEAD
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}