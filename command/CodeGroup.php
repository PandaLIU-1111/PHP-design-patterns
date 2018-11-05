<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/5
 * Time: 14:07
 */

require_once './Group.php';

class CodeGroup extends Group
{
    public function find()
    {
        // TODO: Implement find() method.
        echo '找到开发组' . PHP_EOL;
    }

    public function add()
    {
        // TODO: Implement add() method.
        echo '客户需求添加一个新功能' . PHP_EOL;
    }

    public function delete()
    {
        // TODO: Implement delete() method.
        echo '客户要求减少一个功能' . PHP_EOL;
    }

    public function change()
    {
        // TODO: Implement change() method.
        echo '客户要求改变一个功能' . PHP_EOL;
    }

    public function plan()
    {
        // TODO: Implement plan() method.
        echo '客户要求改变计划' . PHP_EOL;
    }

}