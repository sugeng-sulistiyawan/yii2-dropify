<?php

namespace diecoding\dropify;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Dropify is class for widgets that collect user file inputs.
 * 
 * @link [sugeng-sulistiyawan.github.io](sugeng-sulistiyawan.github.io)
 * @author Sugeng Sulistiyawan <sugeng.sulistiyawan@gmail.com>
 * @copyright Copyright (c) 2023
 */
class Dropify extends InputWidget
{
    /**
     * @var array image file extensions for show preview
     */
    public $imgFileExtensions = [
        // Animated Portable Network Graphics
        'apng',

        // AV1 Image File Format
        'avif',

        // Graphics Interchange Format
        'gif',

        // Joint Photographic Expert Group image
        'jpeg',
        'jpg',
        'jpeg',
        'jfif',
        'pjpeg',
        'pjp',

        // Portable Network Graphics
        'png',

        // Scalable Vector Graphics
        'svg',

        // Web Picture format
        'webp',

        // Bitmap file
        'bmp',

        // Microsoft Icon
        'ico',
        'cur',

        // Tagged Image File Format
        'tif',
        'tiff',
    ];

    /**
     * @var bool default `false`, `true` if use custom or external dropify assets
     */
    public $skipCoreAssets = false;

    /**
     * @var array default `[]`, for option `$(#options['id']).dropify(pluginOptions);`
     */
    public $pluginOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if ($this->skipCoreAssets === false) {
            $this->view->registerAssetBundle(DropifyCustomAsset::class);
        }

        $this->pluginOptions = ArrayHelper::merge([
            "class"             => "dropify",
            "imgFileExtensions" => $this->imgFileExtensions,
        ], $this->pluginOptions);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $pluginOptions = Json::encode($this->pluginOptions);

        $this->view->registerJs("$('#{$this->options['id']}').dropify({$pluginOptions});");

        if ($this->hasModel()) {
            return Html::activeFileInput($this->model, $this->attribute, $this->options);
        } else {
            return Html::fileInput($this->name, $this->value, $this->options);
        }
    }
}
