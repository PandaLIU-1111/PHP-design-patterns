<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/10/28
 * Time: 3:38 PM
 */

/**
 * 建造者模式
 */

abstract class CarModel
{
    public $sequence = [];

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
        foreach ($this->sequence as $item){
            switch ($item){
                case 'start':
                    $this->start();
                    break;
                case 'stop':
                    $this->stop();
                    break;
                case 'alarm':
                    $this->alarm();
                    break;
                case 'engineBoom':
                    $this->engineBoom();
                    break;
            }
        }
    }

    final public function setSequence(array $squence){
        $this->sequence = $squence;
    }
}


class BMWCarModal extends CarModel
{
    public function start()
    {
        // TODO: Implement start() method.
        echo '宝马启动' , PHP_EOL;
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        echo '宝马停车' , PHP_EOL;
    }

    public function alarm()
    {
        // TODO: Implement alarm() method.
        echo '宝马喇叭响了' , PHP_EOL;
    }

    public function engineBoom()
    {
        // TODO: Implement engineBoom() method.
        echo '宝马引擎启动了' , PHP_EOL;
    }

}


class BenzCarModal extends CarModel
{
    public function start()
    {
        // TODO: Implement start() method.
        echo '奔驰启动' , PHP_EOL;
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        echo '奔驰停车' , PHP_EOL;
    }

    public function alarm()
    {
        // TODO: Implement alarm() method.
        echo '奔驰喇叭响了' , PHP_EOL;
    }

    public function engineBoom()
    {
        // TODO: Implement engineBoom() method.
        echo '奔驰引擎启动了' , PHP_EOL;
    }
}

abstract class carBuilder
{
    protected $car;

    public abstract function setSequence(array $squence);

    final public function getCarModel()
    {
        return $this->car;
    }
}

class BenzCarBuilder extends carBuilder
{
    public function __construct()
    {
        $this->car = new BenzCarModal();
    }

    public function setSequence(array $squence)
    {
        // TODO: Implement setSequence() method.
        $this->car->setSequence($squence);
    }

}

class BMWCarBuilder extends carBuilder
{
    public function __construct()
    {
        $this->car = new BMWCarModal();
    }

    public function setSequence(array $squence)
    {
        // TODO: Implement setSequence() method.
        $this->car->setSequence($squence);
    }

}

$squence = ['start','alarm','engineBoom' ,'stop'];
$bmw = new BMWCarBuilder();
$bmw->setSequence($squence);
$bmw->getCarModel()->run();



