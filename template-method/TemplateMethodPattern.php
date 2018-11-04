<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/10/28
 * Time: 3:14 PM
 */

/**
 * 模版模式
 */

abstract class CarModel
{
    /**
     * 汽车启动
     */
    public abstract function start();

    /**
     * 汽车停止
     */
    public abstract function stop();

    /**
     * 喇叭
     */
    public abstract function alarm();

    /**
     * 引擎
     */
    public abstract function engineBoom();

    /**
     * 汽车跑
     */
    public function run()
    {
        $this->start();
        $this->engineBoom();
        $this->alarm();
        $this->stop();
    }
}


class HummerH1Model extends CarModel
{

    public function start()
    {
        // TODO: Implement start() method.
        echo '悍马H1启动' , PHP_EOL;
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        echo '悍马H1停车' , PHP_EOL;
    }

    public function alarm()
    {
        // TODO: Implement alarm() method.
        echo '悍马H1喇叭响了' , PHP_EOL;
    }

    public function engineBoom()
    {
        // TODO: Implement engineBoom() method.
        echo '悍马H1引擎启动了' , PHP_EOL;
    }
}


class HummerH2Model extends CarModel
{
    public function start()
    {
        // TODO: Implement start() method.
        echo '悍马H2启动' , PHP_EOL;
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        echo '悍马H2停车' , PHP_EOL;
    }

    public function alarm()
    {
        // TODO: Implement alarm() method.
        echo '悍马H2喇叭响了' , PHP_EOL;
    }

    public function engineBoom()
    {
        // TODO: Implement engineBoom() method.
        echo '悍马H2引擎启动了' , PHP_EOL;
    }
}

$h1 = new HummerH1Model();
$h1->run();
$h2 = new HummerH2Model();
$h2->run();