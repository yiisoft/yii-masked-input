Assets Setup
============

This extensions relies on [NPM](https://www.npmjs.org/) packages for the asset installation.
Before using this package you should decide in which way you will install those packages in your project.


## Using asset-packagist repository

You can setup [asset-packagist.org](https://asset-packagist.org) as package source for the JQuery Input Mask assets.

In the `composer.json` of your project, add the following lines:

```json
"repositories": [
    {
        "type": "composer",
        "url": "https://asset-packagist.org"
    }
]
```

Adjust `@npm` alias in you application configuration:

```php
return [
    //...
    'aliases' => [
        '@npm' => '@vendor/npm-asset',
    ],
    //...
];
```


## Using composer asset plugin

Install [composer asset plugin](https://github.com/francoispluchino/composer-asset-plugin/) globally, using following command:

```
composer global require "fxp/composer-asset-plugin:^1.4.0"
```

Add the following lines to `composer.json` of your project to adjust directories where the installed packages
will be placed, if you want to publish them using Yii:

```json
"extra": {
    "asset-installer-paths": {
        "npm-asset-library": "vendor/npm"
    }
}
```

Then you can run composer install/update command to pick up JQuery Input Mask assets.

> Note: `fxp/composer-asset-plugin` significantly slows down the `composer update` command in comparison
  to asset-packagist.


## Using NPM client directly

You can install JQuery Input Mask assets directly via NPM client.
In the `package.json` of your project, add the following lines:

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

In the `composer.json` of your project, add the following lines in order to prevent redundant JQuery Input Mask asset installation:

```json
"replace": {
    "npm-asset/inputmask": ">=3.3.5"
},
```


## Using CDN

You may use JQuery Input Mask assets from CDN like [https://www.jsdelivr.com](https://www.jsdelivr.com/package/npm/inputmask).

In the `composer.json` of your project, add the following lines in order to prevent redundant JQuery Input Mask asset installation:

```json
"replace": {
    "npm-asset/inputmask": ">=3.3.5"
},
```

Configure 'assetManager' application component, overriding JQuery Input Mask assent bundle with CDN links:

```php
return [
    'components' => [
        'assetManager' => [
            // override bundle to use CDN :
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
