# Yii2 Dropify

Override your input files with style for Yii2

[![Latest Stable Version](https://img.shields.io/packagist/v/diecoding/yii2-dropify?label=stable)](https://packagist.org/packages/diecoding/yii2-dropify)
[![Total Downloads](https://img.shields.io/packagist/dt/diecoding/yii2-dropify)](https://packagist.org/packages/diecoding/yii2-dropify)
[![Latest Stable Release Date](https://img.shields.io/github/release-date/sugeng-sulistiyawan/yii2-dropify)](https://github.com/sugeng-sulistiyawan/yii2-dropify)
[![Quality Score](https://img.shields.io/scrutinizer/quality/g/sugeng-sulistiyawan/yii2-dropify)](https://scrutinizer-ci.com/g/sugeng-sulistiyawan/yii2-dropify)
[![Build Status](https://img.shields.io/travis/com/sugeng-sulistiyawan/yii2-dropify)](https://app.travis-ci.com/sugeng-sulistiyawan/yii2-dropify)
[![License](https://img.shields.io/github/license/sugeng-sulistiyawan/yii2-dropify)](https://github.com/sugeng-sulistiyawan/yii2-dropify)
[![PHP Version Require](https://img.shields.io/packagist/dependency-v/diecoding/yii2-dropify/php?color=6f73a6)](https://packagist.org/packages/diecoding/yii2-dropify)

> Yii2 Dropify uses [Dropify](https://github.com/JeremyFagis/dropify) <br> Demo: http://jeremyfagis.github.io/dropify

## Table of Contents

- [Yii2 Dropify](#yii2-dropify)
  - [Table of Contents](#table-of-contents)
  - [Instalation](#instalation)
  - [Dependencies](#dependencies)
  - [Usage](#usage)
    - [Forms/Views](#formsviews)

## Instalation

Package is available on [Packagist](https://packagist.org/packages/diecoding/yii2-dropify), you can install it using [Composer](https://getcomposer.org).

```shell
composer require diecoding/yii2-dropify "^1.0"
```

or add to the require section of your `composer.json` file.

```shell
"diecoding/yii2-dropify": "^1.0"
```

## Dependencies

- PHP 7.4+
- [yiisoft/yii2](https://github.com/yiisoft/yii2)
- [npm-asset/dropify](https://asset-packagist.org/package/npm-asset/dropify)

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

---

Read more docs: https://sugengsulistiyawan.my.id/docs/opensource/yii2/dropify/
