# Yii2 Dropify
Override your input files with style for Yii2

[![Latest Stable Version](http://poser.pugx.org/diecoding/yii2-dropify/v?)](https://packagist.org/packages/diecoding/yii2-dropify)
[![Total Downloads](http://poser.pugx.org/diecoding/yii2-dropify/downloads?)](https://packagist.org/packages/diecoding/yii2-dropify)
[![Quality Score](https://img.shields.io/scrutinizer/g/sugeng-sulistiyawan/yii2-dropify.svg?)](https://scrutinizer-ci.com/g/sugeng-sulistiyawan/yii2-dropify)
[![Build Status](https://app.travis-ci.com/sugeng-sulistiyawan/yii2-dropify.svg?branch=master)](https://app.travis-ci.com/sugeng-sulistiyawan/yii2-dropify)
[![Latest Unstable Version](http://poser.pugx.org/diecoding/yii2-dropify/v/unstable?)](https://packagist.org/packages/diecoding/yii2-dropify)
[![License](http://poser.pugx.org/diecoding/yii2-dropify/license?)](https://packagist.org/packages/diecoding/yii2-dropify)
[![PHP Version Require](http://poser.pugx.org/diecoding/yii2-dropify/require/php?)](https://packagist.org/packages/diecoding/yii2-dropify)

> Yii2 Dropify uses [Dropify](https://github.com/JeremyFagis/dropify) <br> Demo: http://jeremyfagis.github.io/dropify

## Table of Contents

- [Yii2 Dropify](#yii2-dropify)
  - [Table of Contents](#table-of-contents)
  - [Instalation](#instalation)
  - [Dependencies](#dependencies)
  - [Usage](#usage)
    - [Forms/Views](#formsviews)

## Instalation

Package is available on [Packagist](https://packagist.org/packages/diecoding/yii2-dropify), 
you can install it using [Composer](https://getcomposer.org).

```shell
composer require diecoding/yii2-dropify ~1.0
```

or add to the require section of your `composer.json` file.

```
"diecoding/yii2-dropify": "~1.0"
```

## Dependencies

- PHP 7.4+
- [yiisoft/yii2](https://github.com/yiisoft/yii2)
- [bower-asset/dropify](https://asset-packagist.org/package/bower-asset/dropify)

## Usage

### Forms/Views

```php
use diecoding\dropify\Dropify;

// Simple
echo Dropify::widget([
    'name' => 'image',
]);

// Advanced
echo Dropify::widget([
    'name' => 'image',
    'options' => [ 
        // options for input widget
    ],
    'pluginOptions' => [ 
        // options for dropify, as output `$(#options['id']).dropify(pluginOptions);`
        // @see https://github.com/JeremyFagis/dropify#options
    ],
    'imgFileExtensions' = [
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
    ],
    'skipCoreAssets' => false, // (bool) default `false`, `true` if use custom or external dropify assets
]);

// Simple with $model / ActiveField
echo $form->field($model, 'image')->widget(Dropify::class);

// Advanced with $model / ActiveField
echo $form->field($model, 'image')->widget(Dropify::class, [
    'options' => [ 
        // options for input widget
    ],
    'pluginOptions' => [ 
        // options for dropify, as output `$(#options['id']).dropify(pluginOptions);`
        // @see https://github.com/JeremyFagis/dropify#options
    ],
    'imgFileExtensions' = [
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
    ],
    'skipCoreAssets' => false, // (bool) default `false`, `true` if use custom or external dropify assets
]);
```
