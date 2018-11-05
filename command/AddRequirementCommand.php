<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/5
 * Time: 14:16
 */

require_once './Command.php';

class AddRequirementCommand extends Command
{

    public function execute()
    {
        // TODO: Implement execute() method.
        $this->rg->find();
        $this->rg->add();
        $this->rg->plan();
    }
}