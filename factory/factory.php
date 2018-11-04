<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/10/27
 * Time: 12:13 PM
 */

/**
 * 工厂模式
 * Class factory
 */
class factory1
{
    public function createdHuman(human $human){
        return $human;
    }
}

class human1
{
    protected $name;
    protected $color;

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }
}


class blackMan extends human1
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->color = 'black';
    }
}

class yellowMan extends human1
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->color = 'yellow';
    }
}

class whiteMan extends human1
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->color = 'white';
    }
}


class test
{
    public function __construct()
    {
        $human = new factory1();
        echo '创建一个白人', PHP_EOL;
        echo $human->createdHuman(new whiteMan('白人'))->getColor(), PHP_EOL;
        echo '创建一个黑人', PHP_EOL;
        echo $human->createdHuman(new blackMan('黑人'))->getColor(), PHP_EOL;
        echo '创建一个黄人', PHP_EOL;
        echo $human->createdHuman(new yellowMan('黄人'))->getColor(), PHP_EOL;

    }
}