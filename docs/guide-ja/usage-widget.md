ウィジェット
============

[[MaskedInput]] を使うためには [[mask]] プロパティを設定する必要があります。
次の例は、MaskedInput を使って電話番号を収集する方法を示しています。

```php
echo MaskedInput::widget([
    'name' => 'phone',
    'mask' => '999-999-9999',
]);
```

このウィジェットを [[ActiveField::widget()|widget()]] メソッドを使って [[ActiveForm]] の中で使うことも出来ます。
例えば、

```php
<?= $form->field($model, 'phone')->widget(yii\widgets\MaskedInput::class, [
    'mask' => '999-999-9999',
]) ?>
```
