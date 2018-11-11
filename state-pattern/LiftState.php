<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/11
 * Time: 4:45 PM
 */

abstract class LiftState
{
    public $context;

    /**
     * @param mixed $context
     */
    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    public abstract function open();

    public abstract function close();

    public abstract function run();

    public abstract function stop();
}