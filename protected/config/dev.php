<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return CMap::mergeArray(
    require(dirname(__FILE__). '/main.php'),
    array(
        'name'=>'Roombot Dev',

        // application components
        'components'=>array(

            'db'=>array(
                'connectionString' => 'mysql:host=localhost;dbname=roombot',
                'emulatePrepare' => true,
                'username' => 'project',
                'password' => 'astamproject',
                'charset' => 'utf8',
            ),

            'errorHandler'=>array(
                // use 'site/error' action to display errors
                'errorAction'=>'site/error',
            ),

            'log'=>array(
                'class'=>'CLogRouter',
                'routes'=>array(
                    array(
                        'class'=>'CFileLogRoute',
                        'levels'=>'error, warning',
                    ),
                    // uncomment the following to show log messages on web pages
                    array(
                        'class'=>'CWebLogRoute',
                    ),
                ),
            ),
        ),
    )
);