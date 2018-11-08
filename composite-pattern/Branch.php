<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/8
 * Time: 13:51
 */

require_once './Corp.php';

class Branch extends Corp
{

    private $subordinateList = [];

    private $name;

    private $postion;

    private $salary;

    public function addBranch($branch)
    {
        // TODO: Implement addBranch() method.
        $this->subordinateList[] = $branch;
    }

    public function addLeaf($leaf)
    {
        // TODO: Implement AddLeaf() method.
        $this->subordinateList[] = $leaf;
    }

    public function getSubordinateInfo()
    {
        // TODO: Implement getSubordinateInfo() method.
        return $this->subordinateList;
    }
}