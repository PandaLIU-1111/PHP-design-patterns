<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/5
 * Time: 14:11
 */

require_once './Group.php';

class RequirementGroup extends Group
{
    public function find()
    {
        // TODO: Implement find() method.
        echo '找到需求' . PHP_EOL;
    }

    public function add()
    {
        // TODO: Implement add() method.
        echo '客户需求添加一个新需求' . PHP_EOL;
    }

    public function delete()
    {
        // TODO: Implement delete() method.
        echo '客户要求减少一个需求' . PHP_EOL;
    }

    public function change()
    {
        // TODO: Implement change() method.
        echo '客户要求改变一个需求' . PHP_EOL;
    }

    public function plan()
    {
        // TODO: Implement plan() method.
        echo '客户要求改变计划' . PHP_EOL;
    }

}