<?php

declare(strict_types=1);

namespace Yiisoft\Yii\MaskedInput\Tests;

use yii\helpers\FileHelper;
use yii\helpers\Yii;

abstract class TestCase extends \yii\tests\TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        FileHelper::createDirectory(Yii::getAlias('@Yiisoft/Yii/MaskedInput/assets'));
    }

    /**
     * Clean up after test.
     * By default the application created with [[mockApplication()]] will be destroyed.
     */
    protected function tearDown()
    {
        parent::tearDown();
        FileHelper::removeDirectory(Yii::getAlias('@Yiisoft/Yii/MaskedInput/assets'));
    }
}
