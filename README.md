# migration
php yii migrate -p=XXX

# console/config/main.php
    'modules' => [
        'mqttmodule' => [
            'class' => \my\consoleext\Module::class,
        ]
    ],
    
    'bootstrap' => [
        'mqttmodule',
    ],
