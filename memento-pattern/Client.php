<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 14:25
 */

require_once './Originator.php';
require_once './Caretaker.php';

class Client
{
    public function __construct()
    {
        //定义出发起人
        $originator = new Originator();
        //定义出备忘录管理员
        $caretaker = new Caretaker();
        $originator->setStatus('hhhhhhhhhh');
        echo $originator->getStatus() . PHP_EOL;
        //创建一个备忘录
        $caretaker->setMemento($originator->createMemento());
        $originator->setStatus('h求求求求求');
        echo $originator->getStatus() . PHP_EOL;
        //回复一个备忘录
        $originator->restoreMemento($caretaker->getMemento());
        echo $originator->getStatus() . PHP_EOL;
    }
}

new Client();