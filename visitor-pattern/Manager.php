<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 17:00
 */

require_once './Employee.php';
require_once './IVisitor.php';

class Manager extends acceptEmployee
{
    private $performance;

    /**
     * @return mixed
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * @param mixed $performance
     */
    public function setPerformance($performance): void
    {
        $this->performance = $performance;
    }

//
    public function accept(IVisitor $visitor)
    {
     // TODO: Implement accept() method.
        $visitor->getManager($this);
    }

}