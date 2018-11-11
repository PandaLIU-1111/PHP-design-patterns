<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/11
 * Time: 4:44 PM
 */

require_once './Context.php';
require_once './ClosingState.php';
require_once './OpeningState.php';
require_once './StoppingState.php';
require_once './RunningState.php';

class Client
{
    public function __construct()
    {
        $context = new Context();
        $context->setLiftState(new ClosingState());
        $context->open();
        $context->close();
        $context->run();
        $context->stop();
    }
}

new Client();