インストール
============

## Composer パッケージを取得する

このエクステンションをインストールするために推奨される方法は [composer](http://getcomposer.org/download/) による方法です。

下記を実行して下さい。

```
php composer.phar require --prefer-dist yiisoft/yii2-maskedinput
```

または、あなたの `composer.json` ファイルの `require` セクションに下記を追加して下さい。

```
"yiisoft/yii2-maskedinput": "~1.0.0"
```

このパッケージは、Yii バージョン 2.1 以上のための MaskedInput ウィジェットを含むものです。
2.0 ではこのウィジェットはフレームワーク・パッケージに同梱されており、追加のインストールは必要が無いことに注意して下さい。
