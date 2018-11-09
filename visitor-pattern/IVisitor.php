<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 17:12
 */

require_once './CommonEmployee.php';
require_once './Manager.php';

interface IVisitor
{
    public function getEmployee(CommonEmployee $commonEmployee);

    public function getManager(Manager $manager);
}