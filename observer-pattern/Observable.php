<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/8
 * Time: 16:15
 */

interface Observable
{
    public function addObservable(Observer $observable);
    public function deleteObservable(Observer $observable);
    public function notifyObservable(string $content);
}