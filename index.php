<?php

$webRoot = dirname(__FILE__);

if ( in_array($_SERVER['SERVER_ADDR'], array( '127.0.0.1' , '10.10.11.200' )) )  {
    //It's dev domain, so enable dev options
    // change the following paths if necessary
    require($webRoot . '/../framework/YiiBase.php');
    /**
     * To configure using autocomplete install YiiStrom plugin
     * check http://www.yiiframework.ru/doc/cookbook/ru/ide
     * check http://rmcreative.ru/blog/post/yii--avtokomplit-dlja-yiiapp
     * File → Settings → Project settings → PHP → PHP Home → Add. Указываем путь до директории framework.
     */
    class Yii extends YiiBase {
        /**
         * @static
         * @return CWebApplication
         */
        public static function app()
        {
            return parent::app();
        }
    }
    $config=$webRoot.'/protected/config/dev.php';
    defined('YII_DEBUG') or define('YII_DEBUG', true);
} else {
    $config=$webRoot.'/protected/config/production.php';
    require_once(dirname($webRoot).'/framework/yiilite.php');
}

// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

Yii::createWebApplication($config)->run();
