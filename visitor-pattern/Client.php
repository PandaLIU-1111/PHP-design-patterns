<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 17:02
 */

require_once './CommonEmployee.php';
require_once './Manager.php';
require_once './Visitor.php';

class Client
{
    public function __construct()
    {
        $list = $this->mockEmployee();
        foreach ($list as $item){
            if($item instanceof Manager){
                $item->accept(new Visitor());
            }else{
                $item->accept(new Visitor());
            }
        }
    }

    public function mockEmployee()
    {
        $employee = [];

        $zhansan = new CommonEmployee();
        $zhansan->setJob('就是一个Java程序狗');
        $zhansan->setName('张三');
        $zhansan->setSalary('10000');
        $zhansan->setSex(Employee::FEMALE);
        $employee[] = $zhansan;

        $liSi = new CommonEmployee();
        $liSi->setJob('就是一个PHP程序狗');
        $liSi->setName('李四');
        $liSi->setSalary('10000');
        $liSi->setSex(Employee::FEMALE);
        $employee[] = $liSi;

        $manager = new Manager();
        $manager->setPerformance('我就是一个经理');
        $manager->setName('经理');
        $manager->setSalary('10000000');
        $manager->setSex(Employee::FEMALE);
        $employee[] = $manager;
        return $employee;
    }
}

new Client();