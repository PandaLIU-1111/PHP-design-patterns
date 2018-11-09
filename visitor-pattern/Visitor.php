<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 17:15
 */

require_once './IVisitor.php';

class Visitor implements IVisitor
{
    public function getEmployee(CommonEmployee $commonEmployee)
    {
        // TODO: Implement getEmployee() method.
    }

    public function getManager(Manager $manager)
    {
        // TODO: Implement getManager() method.
    }

    public function getBaseInfo(Employee $employee)
    {
        echo "姓名：" . $employee->getName() . "\t" . "性别：" . $employee->getSex()  . "\t" . "薪水：" . $employee->getSalary()  . PHP_EOL;
    }

    public function getManagerInfo(Manager $manager)
    {
        $this->getBaseInfo($manager);
        echo "业绩：" . $manager->getPerformance() . PHP_EOL;
    }

    public function getEmployeeInfo(CommonEmployee $commonEmployee)
    {
        $this->getBaseInfo($commonEmployee);
        echo "工作：" . $commonEmployee->getJob() . PHP_EOL;
    }


}