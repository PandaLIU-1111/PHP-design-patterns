<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/11
 * Time: 5:06 PM
 */

require_once "./LiftState.php";

class StoppingState extends LiftState
{
    public function open()
    {
        // TODO: Implement open() method.
        $this->context->setLiftState(new OpeningState());
        $this->context->getLiftState()->open();
    }

    public function close()
    {
        // TODO: Implement close() method.
        $this->context->setLiftState(new ClosingState());
        $this->context->getLiftState()->close();
    }

    public function run()
    {
        // TODO: Implement run() method.
        $this->context->setLiftState(new RunningState());
        $this->context->getLiftState()->run();
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        echo '电梯停止中' . PHP_EOL;
    }

}