<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/7
 * Time: 16:11
 */

require_once './Strategy1.php';
require_once './Strategy2.php';
require_once './Context.php';

class Client
{
    public function __construct()
    {
        $s1 = new Strategy1();
        $s2 = new Strategy2();
        $context = new Context($s1);
        $context->doAnyThing();
        $context = new Context($s2);
        $context->doAnyThing();
    }
}

new Client();