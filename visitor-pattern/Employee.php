<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 16:56
 */

require_once './IVisitor.php';

abstract class Employee
{
    //男
    const MALE = 0;
    //女
    const FEMALE = 1;

    private $name;

    private $salary;

    private $sex;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex): void
    {
        $this->sex = $sex;
    }

//    public function report()
//    {
//        echo "姓名：" . $this->name . "\t" . "性别：" . $this->sex . "\t" . "薪水：" . $this->salary . PHP_EOL;
//       $this->getOtherReport();
//    }
//
//    public abstract function getOtherReport();


    public abstract function accept(IVisitor $visitor);
}