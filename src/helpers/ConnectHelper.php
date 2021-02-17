<?php

namespace my\consoleext\helpers;

class ConnectHelper
{
    public static function connect()
    {
        return [
            'key' => password_hash('123456', PASSWORD_BCRYPT),
            'time' => time(),
        ];
    }
}
