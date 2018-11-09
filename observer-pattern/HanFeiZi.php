<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/8
 * Time: 16:18
 */

require_once './IHanFeiZi.php';
require_once './Observable.php';

class HanFeiZi implements IHanFeiZi,Observable
{
    private $arrayList = [];

    public function haveBreakfast()
    {

        // TODO: Implement haveBreakfast() method.
        echo '韩非子吃饭啦' . PHP_EOL;

        $this->notifyObservable('韩非子开始吃饭');
    }

    public function haveFun()
    {
        // TODO: Implement haveFun() method.
        echo '韩非子在娱乐啦' . PHP_EOL;
        $this->notifyObservable('韩非子开始娱乐');
    }

    public function addObservable(Observer $observer)
    {
        // TODO: Implement addObservable() method.
        $this->arrayList[] = $observer;
    }

    public function deleteObservable(Observer $observer)
    {
        // TODO: Implement deleteObservable() method.
    }

    public function notifyObservable(string $content)
    {
//        var_dump($content);
//        die();
        // TODO: Implement notifyObservable() method.
        foreach ($this->arrayList as $item){
            $item->update($content);
        }
    }

}