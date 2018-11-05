<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/5
 * Time: 14:13
 */

require_once './RequirementGroup.php';
require_once './PageGroup.php';
require_once './CodeGroup.php';

abstract class Command
{
    protected $rg;
    protected $pg;
    protected $cg;

    public function __construct()
    {
        $this->rg = new RequirementGroup();
        $this->pg = new PageGroup();
        $this->cg = new CodeGroup();
    }

    public abstract function execute();
}