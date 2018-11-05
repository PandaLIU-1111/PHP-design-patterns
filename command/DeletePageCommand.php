<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/5
 * Time: 14:20
 */

require_once './Command.php';

class DeletePageCommand extends Command
{

    public function execute()
    {
        // TODO: Implement execute() method.
        $this->pg->find();
        $this->pg->delete();
        $this->pg->plan();
    }
}