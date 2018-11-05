<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/5
 * Time: 14:26
 */

class Invoker
{
    private $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function action()
    {
        $this->command->execute();
    }
}