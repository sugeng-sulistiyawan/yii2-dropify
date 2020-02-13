# Yii2 Dropify
Override your input files with style — Demo here : http://jeremyfagis.github.io/dropify

[![Latest Version](https://img.shields.io/github/release/die-coding/yii2-dropify.svg?style=flat-square)](https://github.com/die-coding/yii2-dropify/releases)
[![Software License](https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Quality Sdropify](https://img.shields.io/scrutinizer/g/die-coding/yii2-dropify.svg?style=flat-square)](https://scrutinizer-ci.com/g/die-coding/yii2-dropify)
[![Total Downloads](https://img.shields.io/packagist/dt/diecoding/yii2-dropify.svg?style=flat-square)](https://packagist.org/packages/diecoding/yii2-dropify)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist diecoding/yii2-dropify "*"
```

or add

```
"diecoding/yii2-dropify": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, use it in your code

```php
<?php echo \diecoding\dropify\Dropify::widget([
    'options' => [ // options for input widget

    ]
    'pluginOptions' => [ // options for dropify, as output  ```$(#options['id']).dropify(pluginOptions);```
        
    ]
]); ?>
```

or    

```php
<?php echo $form->field($model, 'image')->widget(\diecoding\dropify\Dropify::className(), [
    'options' => [ // options for input widget

    ]
    'pluginOptions' => [ // options for dropify, as output  ```$(#options['id']).dropify(pluginOptions);```
        
    ]
]) ?>
```
