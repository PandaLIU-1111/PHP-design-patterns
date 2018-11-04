<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/10/27
 * Time: 12:14 PM
 */

/**
 * 优点：
 *      封装性，每个东西不需要关心高层模块的实现，只管用就行
 *      不需要管高层模块的约束，你只需要直接生产
 * 缺点：扩展难
 */


/**
 * 抽象工厂
 */
abstract class AbstractProduct
{
    //公共的方法
    public function shareMethod()
    {
        echo '分享产品' , PHP_EOL;
    }

    public abstract function doSomething();
}


class productA extends AbstractProduct
{
    public function doSomething()
    {
        // TODO: Implement doSomething() method.
        echo '这是产品A' , PHP_EOL;
    }
}

class productB extends AbstractProduct
{
    public function doSomething()
    {
        // TODO: Implement doSomething() method.
        echo '这是产品B' , PHP_EOL;
    }
}

class productA2 extends AbstractProduct
{
    public function doSomething()
    {
        // TODO: Implement doSomething() method.
        echo '这是产品A2' , PHP_EOL;
    }
}

class productB2 extends AbstractProduct
{
    public function doSomething()
    {
        // TODO: Implement doSomething() method.
        echo '这是产品B2' , PHP_EOL;
    }
}

abstract class createdProduct
{
    public abstract function createdProductA();

    public abstract function createdProductB();
}

class creator1 extends createdProduct
{
    public function createdProductA()
    {
        // TODO: Implement createdProductA() method.
        return new productA();
    }

    public function createdProductB()
    {
        // TODO: Implement createdProductB() method.
        return new productB();
    }
}

class creator2 extends createdProduct
{
    public function createdProductA()
    {
        // TODO: Implement createdProductA() method.
        return new productA2();
    }

    public function createdProductB()
    {
        // TODO: Implement createdProductB() method.
        return new productB2();
    }
}

class testAbstractProduct
{
    public function __construct()
    {
        //定义两个工厂
        $creator1 = new creator1();
        $creator2 = new creator2();
        $a1 = $creator1->createdProductA();
        $a2 = $creator2->createdProductA();
        $b1 = $creator1->createdProductB();
        $b2 = $creator2->createdProductB();
        $a1->shareMethod();
        $a1->doSomething();
        $a2->doSomething();
        $b1->doSomething();
        $b2->doSomething();
    }
}

new testAbstractProduct();