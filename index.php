<?php
// change the following paths if necessary
require(dirname(__FILE__) . '/../framework/YiiBase.php');
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

$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

Yii::createWebApplication($config)->run();
