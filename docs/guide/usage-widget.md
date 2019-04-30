Widget
======

To use [[MaskedInput]], you must set the [[mask]] property. The following example
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
<?= $form->field($model, 'phone')->widget(Yiisoft\Yii\MaskedInput\MaskedInput::class, [
    'mask' => '999-999-9999',
]) ?>
```
