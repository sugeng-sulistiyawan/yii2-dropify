<?php

namespace diecoding\dropify;

use yii\web\AssetBundle;

/**
 * DropifyCustomAsset represents a collection of asset files, such as CSS, JS, images.
 * 
 * @link [sugeng-sulistiyawan.github.io](sugeng-sulistiyawan.github.io)
 * @author Sugeng Sulistiyawan <sugeng.sulistiyawan@gmail.com>
 * @copyright Copyright (c) 2023
 */
class DropifyCustomAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = __DIR__ . '/assets';

    /**
     * @inheritdoc
     */
    public $css = [
        'css/style.min.css',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        DropifyAsset::class,
    ];
}
