<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/11
 * Time: 4:54 PM
 */

require_once './LiftState.php';

class OpeningState extends LiftState
{

    public function open()
    {
        // TODO: Implement open() method.
        echo '电梯打开' . PHP_EOL;
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
        echo '现在是打开状态，不能运行' . PHP_EOL;
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        $this->context->setLiftState(new StoppingState());
        $this->context->getLiftState()->stop();
    }
}