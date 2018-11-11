<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/11
 * Time: 5:05 PM
 */

require_once './LiftState.php';

class RunningState extends LiftState
{

    public function open()
    {
        // TODO: Implement open() method.
        echo '电梯运行中，不能打开';
    }

    public function close()
    {
        // TODO: Implement close() method.
        $this->context->setLiftState(new RunningState());
        $this->context->getLiftState()->close();
    }

    public function run()
    {
        // TODO: Implement run() method.
        echo '电梯上下运行' . PHP_EOL;
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        $this->context->setLiftState(new StoppingState());
        $this->context->getLiftState()->stop();
    }
}