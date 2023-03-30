<?php

namespace diecoding\dropify;

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
    public $sourcePath = '@npm/dropify/dist';

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
}
