<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Masked Input Extension for Yii 2</h1>
    <br>
</p>

This is the Masked Input extension for [Yii framework 2.1](http://www.yiiframework.com). It provides a masked input widget based on
[jQuery Input Mask plugin](http://robinherbots.github.io/Inputmask/).

For license information check the [LICENSE](LICENSE.md)-file.

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-maskedinput/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-maskedinput)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-maskedinput/downloads.png)](https://packagist.org/packages/yiisoft/yii2-maskedinput)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yiisoft/yii2-maskedinput
```

or add

```
"yiisoft/yii2-maskedinput": "~1.0.0"
```

to the require section of your `composer.json` file.

Note that this package contains the MaskedInput widget for Yii versions 2.1 or above, in 2.0 the widget is bundled with the framework package, so no additional install is needed.

Usage
-----

To use MaskedInput, you must set the [[mask]] property. The following example
shows how to use MaskedInput to collect phone numbers:

```php
echo MaskedInput::widget([
    'name' => 'phone',
    'mask' => '999-999-9999',
]);
```
You can also use this widget in an [[ActiveForm]] using the [[ActiveField::widget()|widget()]]
method, for example like this:

```php
<?= $form->field($model, 'from_date')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '999-999-9999',
]) ?>
```
