<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace Yiisoft\Yii\MaskedInput\Tests;

use yii\base\DynamicModel;
use Yiisoft\Yii\MaskedInput\MaskedInput;
use yii\helpers\Yii;

class MaskedInputTest extends TestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->mockWebApplication();
    }

    public function testRender()
    {
        $this->app->setAlias('@webroot/assets', '/tmp');

        $widget = Yii::createObject([
            '__class' => MaskedInput::class,
            'id' => 'test-masked-input',
            'name' => 'phone',
            'mask' => '999-999-9999',
        ]);
        $output = $widget->run();

        $this->assertEquals('<input type="text" id="test-masked-input" class="form-control" name="phone" data-plugin-inputmask="inputmask_7b93eb48">', (string)$output);
    }

    public function testRenderModel()
    {
        $model = new DynamicModel(['phone' => '123456789']);

        $widget = Yii::createObject([
            '__class' => MaskedInput::class,
            'id' => 'test-masked-input',
            'model' => $model,
            'attribute' => 'phone',
            'mask' => '999-999-9999',
        ]);
        $output = $widget->run();

        $this->assertEquals('<input type="text" id="dynamicmodel-phone" class="form-control" name="DynamicModel[phone]" value="123456789" data-plugin-inputmask="inputmask_7b93eb48">', (string)$output);
    }
}
