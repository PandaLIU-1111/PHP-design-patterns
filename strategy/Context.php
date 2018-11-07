<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/7
 * Time: 16:09
 */


class Context
{
    private $strategy = '';

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function doAnyThing()
    {
        $this->strategy->doSomething();
    }
}