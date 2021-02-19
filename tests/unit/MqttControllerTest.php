<?php

use PHPUnit\Framework\TestCase;
use my\consoleext\helpers\ConnectHelper;

class MqttControllerTest extends TestCase
{
    public function testA()
    {
        $obj = new ConnectHelper();
        $this->assertTrue(method_exists($obj, 'connect'));
    }
}
