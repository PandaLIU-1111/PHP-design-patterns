<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2019/10/16
 * Time: 9:26 PM
 */

class RegisterTree
{
    private static $objects;

    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    public static function get($alias)
    {
        return self::$objects[$alias];
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}