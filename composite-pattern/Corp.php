<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/8
 * Time: 14:51
 */

abstract class Corp
{
    private $name;

    private $postion;

    private $salary;

    public function __construct($name,$postion,$salary)
    {
        $this->name = $name;
        $this->postion = $postion;
        $this->salary = $salary;
    }

    public function getInfo()
    {
        // TODO: Implement getInfo() method.
        echo '名字：' . $this->name . "\t";
        echo '职位：' . $this->postion . "\t";
        echo '薪水：' . $this->salary . PHP_EOL;
        echo '================================='. PHP_EOL;
    }
}