<?php

//全局安装的话，直接引入就行
use PHPUnit\Framework\TestCase;

//文件名必须以Test结尾
class AaaTest extends TestCase
{
    //测试的方法必须以test开头
    public function testSay()
    {
        $this->assertTrue(1 == 1);
    }
}

