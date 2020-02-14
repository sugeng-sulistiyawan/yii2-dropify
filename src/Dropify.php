<?php

namespace diecoding\dropify;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;
use yii\widgets\InputWidget;

/**
 * @inheritDoc
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
     * for option ```$(#options['id']).dropify(pluginOptions);```
     * 
     * @var array $pluginOptions
     */
    public $pluginOptions = [];

    protected $_options;

    /**
     * @inheritDoc
     */
    public function init()
    {
        $this->_options = [
            "class" => "dropify",
        ];
        $this->pluginOptions = ArrayHelper::merge($this->_options, $this->pluginOptions);

        parent::init();
    }

    /**
     * @inheritDoc
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
     * @inheritDoc
     */
    public function registerAsset()
    {
        $view = $this->getView();
        DropifyAsset::register($view);
        $pluginOptions = Json::encode($this->pluginOptions);
        $script        = "$('#{$this->options['id']}').dropify({$pluginOptions});";
        $this->view->registerJs($script, View::POS_READY);
    }
}
