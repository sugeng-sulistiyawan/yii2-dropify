<?php

namespace diecoding\dropify;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;
use yii\widgets\InputWidget;

/**
 * @inheritdoc
 * 
 * @author Die Coding (Sugeng Sulistiyawan) <diecoding@gmail.com>
 * @copyright 2020 Die Coding
 * @license BSD-3-Clause
 * @link https://www.diecoding.com
 * @since 2.0.14
 */
class Dropify extends InputWidget
{
    /**
     * for option `$(#options['id']).dropify(pluginOptions);`
     * 
     * @var array $pluginOptions
     */
    public $pluginOptions = [];

    protected $_options;

    /**
     * @inheritdoc
     */
    public function init()
    {
        /**
         * Add preview for type .ico, .webp
         * Fixed Issue https://github.com/die-coding/yii2-dropify/issues/1
         * Add preview for .svg too
         */
        if (empty($this->pluginOptions['imgFileExtensions'])) {
            $this->pluginOptions['imgFileExtensions'] = ['png', 'jpg', 'jpeg', 'gif', 'bmp', 'ico', 'webp', 'svg'];
        }

        $this->_options = [
            "class" => "dropify",
        ];
        $this->pluginOptions = ArrayHelper::merge($this->_options, $this->pluginOptions);

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerAsset();

        if ($this->hasModel()) {
            return Html::activeFileInput($this->model, $this->attribute, $this->options);
        } else {
            return Html::fileInput($this->name, $this->value, $this->options);
        }
    }

    /**
     * @inheritdoc
     */
    public function registerAsset()
    {
        $view = $this->getView();
        DropifyAsset::register($view);
        $pluginOptions = Json::encode($this->pluginOptions);

        $style = ".dropify-wrapper .dropify-message p {font-size: 14px;}";
        $view->registerCss($style);

        $script = "$('#{$this->options['id']}').dropify({$pluginOptions});";
        $view->registerJs($script, View::POS_READY);
    }
}
