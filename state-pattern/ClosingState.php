<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/11
 * Time: 5:05 PM
 */

require_once './LiftState.php';

class ClosingState extends LiftState
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
        echo '电梯关闭' . PHP_EOL;
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
        $this->context->setLiftState(new StoppingState());
        $this->context->getLiftState()->stop();
    }
}