<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/5
 * Time: 14:13
 */

require_once './AddRequirementCommand.php';
require_once './DeletePageCommand.php';
require_once './Invoker.php';
class Client
{
    public function __construct()
    {
        $invoker = new Invoker();
        $invoker->setCommand(new DeletePageCommand());
        $invoker->action();
    }
}

new Client();