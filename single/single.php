<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/10/27
 * Time: 12:11 PM
 */


/**
 * 由于PHP是单线程脚本，不需要考虑并发时会失败
 */

/**
 * 单例模式
 * Class single
 */
class single
{
    private static $obj = null;

    // 防止new
    private function __construct()
    {

    }

    // 防止克隆
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    // 防止序列化重新创建对象
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    // 实例化
    static function getInstance()
    {
        if (!self::$obj instanceof single) {
            static::$obj = new self();
        }
        return static::$obj;

    }

}

$obj1 = single::getInstance();
$obj2 = single::getInstance();
var_dump($obj1, $obj2);