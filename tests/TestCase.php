<?php

namespace yiiunit\maskedinput;

use yii\di\Container;
use yii\helpers\ArrayHelper;
use yii\helpers\Yii;
use yii\helpers\FileHelper;

abstract class TestCase extends \yii\tests\TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        FileHelper::createDirectory(Yii::getAlias('@yiiunit/maskedinput/assets'));
    }

    /**
     * Clean up after test.
     * By default the application created with [[mockApplication()]] will be destroyed.
     */
    protected function tearDown()
    {
        parent::tearDown();
        FileHelper::removeDirectory(Yii::getAlias('@yiiunit/maskedinput/assets'));
    }
}
