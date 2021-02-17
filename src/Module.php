<?php

namespace my\consoleext;

use yii\base\BootstrapInterface;
use yii\console\Application as ConsoleApp;

class Module extends \yii\base\Module implements BootstrapInterface
{
    //必须覆盖这个属性
    public $controllerNamespace = 'my\consoleext\controllers';

    public function bootstrap($app)
    {
        if ($app instanceof ConsoleApp) {
            $app->controllerMap['mqtt'] = [
                'class' => \my\consoleext\controllers\MqttController::class,
            ];
        }
    }
}
