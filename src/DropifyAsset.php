<?php

namespace diecoding\dropify;

use yii\web\AssetBundle;

/**
 * @inheritdoc
 * 
 * @author Die Coding (Sugeng Sulistiyawan) <diecoding@gmail.com>
 * @copyright 2020 Die Coding
 * @license BSD-3-Clause
 * @link https://www.diecoding.com
 * @since 2.0.14
 */
class DropifyAsset extends AssetBundle
{
    /**
     * @var string $sourcePath
     */
    public $sourcePath = '@bower/dropify/dist';

    /**
     * @var array $css
     */
    public $css = [
        YII_ENV_DEV ? 'css/dropify.css' : 'css/dropify.min.css',
    ];

    /**
     * @var array $js
     */
    public $js = [
        YII_ENV_DEV ? 'js/dropify.js' : 'js/dropify.min.js',
    ];

    /**
     * @var array $depends
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
