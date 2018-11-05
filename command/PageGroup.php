<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/5
 * Time: 14:10
 */

require_once './Group.php';

class PageGroup extends Group
{
    public function find()
    {
        // TODO: Implement find() method.
        echo '找到设计组' . PHP_EOL;
    }

    public function add()
    {
        // TODO: Implement add() method.
        echo '客户需求添加一个新的页面' . PHP_EOL;
    }

    public function delete()
    {
        // TODO: Implement delete() method.
        echo '客户要求减少一个页面' . PHP_EOL;
    }

    public function change()
    {
        // TODO: Implement change() method.
        echo '客户要求改变一个页面' . PHP_EOL;
    }

    public function plan()
    {
        // TODO: Implement plan() method.
        echo '客户要求改变计划' . PHP_EOL;
    }

}