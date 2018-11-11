<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/11
 * Time: 4:47 PM
 */

class Context
{
    public static $OPENING_STATE;

    public static $CLOSING_STATE;

    public static $RUNNING_STATE;

    public static $STOPPING_STATE;

    private $liftState;

    public function __construct()
    {
        Context::$OPENING_STATE = new OpeningState();
    }

    /**
     * @param LiftState $liftState
     */
    public function setLiftState(LiftState $liftState): void
    {
        $this->liftState = $liftState;
        $this->liftState->setContext($this);
    }

    /**
     * @return LiftState
     */
    public function getLiftState(): LiftState
    {
        return $this->liftState;
    }

    public function open()
    {
        $this->liftState->open();
    }

    public function stop()
    {
        $this->liftState->stop();
    }

    public function run()
    {
        $this->liftState->run();
    }

    public function close()
    {
        $this->liftState->close();
    }
}