<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return CMap::mergeArray(
    require(dirname(__FILE__). '/main.php'),
    array(
        // application components
        'components'=>array(
            'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=roombot',
                'emulatePrepare' => true,
                'username' => 'user_roombot', //
                'password' => 'room123bot', //
                'charset' => 'utf8',
                'tablePrefix'=>'kj28_',
            ),
        ),
    )
);