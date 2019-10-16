<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2019/10/16
 * Time: 9:37 PM
 */
require_once 'RegisterTree.php';

class Demo
{
    public function index()
    {
        echo "哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈" . PHP_EOL;
    }
}

$demo = new Demo();
var_dump($demo);
$demo->index();

RegisterTree::set('demo', $demo);

$demo2 = RegisterTree::get('demo');
var_dump($demo2);
$demo2->index();


RegisterTree::_unset('demo');
$demo3 = RegisterTree::get('demo');
var_dump($demo3);
$demo3->index();

