<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/8
 * Time: 16:27
 */

require_once './Observer.php';

class WangSi implements Observer
{
    public function update(string $content)
    {
        // TODO: Implement update() method.
        echo 'WangSi:获取情报' . PHP_EOL;
        $this->report($content);
        echo 'WangSi:报告完毕' . PHP_EOL;

    }

    public function report($str)
    {
        echo $str . PHP_EOL;
    }
}