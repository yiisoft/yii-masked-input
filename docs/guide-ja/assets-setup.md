アセットのセットアップ
======================

このエクステンションはアセットのインストールのために [NPM](https://www.npmjs.org/) に依存しています。
このパッケージを使う前に、NPM パッケージをあなたのプロジェクトにインストールする方法を決定しなければなりません。


## asset-packagist レポジトリを使う

[asset-packagist.org](https://asset-packagist.org) を JQuery Input Mask アセットのソース・パッケージとしてセットアップすることが出来ます。

あなたのプロジェクトの `composer.json` に下記の行を追加して下さい。

```json
"repositories": [
    {
        "type": "composer",
        "url": "https://asset-packagist.org"
    }
]
```

そして、アプリケーション構成で `@npm` を設定します。

```php
return [
    //...
    'aliases' => [
        '@npm'   => '@vendor/npm-asset',
    ],
    //...
];
```


## composer アセット・プラグインを使う

次のコマンドを使って [composer アセット・プラグイン](https://github.com/francoispluchino/composer-asset-plugin/) をグローバルにインストールします。

```
composer global require "fxp/composer-asset-plugin:^1.4.0"
```

Yii を使ってアセットを発行したい場合は、あなたのプロジェクトの `composer.json` に下記の行を追加して、
インストールされるパッケージが置かれるディレクトリを設定します。

```json
"extra": {
    "asset-installer-paths": {
        "npm-asset-library": "vendor/npm",
    }
}
```

これで、`composer install/update` コマンドを実行すると、JQuery Input Mask のアセットを取得することが可能になります。

> Note: `fxp/composer-asset-plugin` は asset-packagist に比べると、`composer update`
  コマンドを著しく遅くさせます。


## NPM クライアントを直接に使う

NPM のクライアントを直接に使って JQuery Input Mask のアセットをインストールすることが出来ます。
あなたのプロジェクトの `package.json` に次の行を追加して下さい。

```json
{
    ...
    "dependencies": {
        "inputmask": "3.3.5",
        ...
    }
    ...
}
```

あなたのプロジェクトの `package.json` に次の行を追加して、JQuery Input Mask アセットの冗長なインストールを防止します。

```json
"replace": {
    "npm-asset/inputmask": ">=3.3.5"
},
```


## CDN を使う

[https://www.jsdelivr.com](https://www.jsdelivr.com/package/npm/inputmask) のような CDN から JQuery Input Mask アセットを使うことが出来ます。

あなたのプロジェクトの `package.json` に次の行を追加して、JQuery Input Mask アセットの冗長なインストールを防止します。

```json
"replace": {
    "npm-asset/inputmask": ">=3.3.5"
},
```

'assetManager' アプリケーション・コンポーネントを構成して、JQuery Input Mask アセット・バンドルを CDN のリンクでオーバーライドします。

```php
return [
    'components' => [
        'assetManager' => [
            // バンドルをオーバーライドして CDN を使う
            'bundles' => [
                'yii\widgets\MaskedInputAsset' => [
                    'sourcePath' => null,
                    'baseUrl' => 'https://cdn.jsdelivr.net/npm/inputmask@3.3.11',
                    'js' => [
                        'index.min.js'
                    ],
                ],
            ],
        ],
        // ...
    ],
    // ...
];
```
