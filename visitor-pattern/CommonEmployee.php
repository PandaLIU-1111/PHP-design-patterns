<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 17:04
 */

require_once './Employee.php';
require_once './IVisitor.php';

class CommonEmployee extends Employee
{
    private $job;

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job): void
    {
        $this->job = $job;
    }


    public function accept(IVisitor $visitor)
    {
        // TODO: Implement accept() method.
        $visitor->getEmployee($this);
    }
}