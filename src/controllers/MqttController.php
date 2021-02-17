<?php

namespace my\consoleext\controllers;

use yii\console\Controller;

/**
 * Class MqttController!
 * -h的提示，必须写在最前面。（提示前面有@XXX的话，不会显示了!）
 *
 * @package my\consoleext\controllers
 *
 * 不会显示的提示
 */
class MqttController extends Controller
{
    public $message;

    public function actionIndex()
    {
        $res = \my\consoleext\helpers\ConnectHelper::connect();
        var_dump($res);
        echo "\r\n";
    }

    /**
     * -h的提示：只显示第一行
     * 第二行之后的不显示了
     *
     * @param $a
     *
     * cvccccccccccccccc
     */
    public function actionCreate($a)
    {
        var_dump(func_get_args());
        echo "\r\n";

        var_dump($this->message);
        echo "\r\n";
    }

    public function options($actionID)
    {
        $options = parent::options($actionID);
        $options[] = 'message';

        return $options;
    }

    /**
     * @return array|string[]
     */
    public function optionAliases()
    {
        $optionAliases = parent::optionAliases();
        $optionAliases['m'] = 'message';

        return $optionAliases;
    }
}
