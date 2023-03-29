<?php

namespace diecoding\yii2\dropify\assets;

use Yii;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * DropifyAsset represents a collection of asset files, such as CSS, JS, images.
 * 
 * @link [sugeng-sulistiyawan.github.io](sugeng-sulistiyawan.github.io)
 * @author Sugeng Sulistiyawan <sugeng.sulistiyawan@gmail.com>
 * @copyright Copyright (c) 2023
 */
class DropifyAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/dropify/dist';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/dropify.min.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/dropify.min.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        YiiAsset::class,
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $css = <<< CSS
.dropify-wrapper .dropify-message p {
    font-size: 14px;
}
CSS;

        Yii::$app->view->registerCss($css);
    }
}
