<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/8
 * Time: 16:27
 */

require_once './LiSi.php';
require_once './WangSi.php';
require_once 'HanFeiZi.php';

class Client
{
    public function __construct()
    {
        $lisi = new LiSi();
        $wangsi = new WangSi();

        $hanfeizi = new HanFeiZi();

        $hanfeizi->addObservable($lisi);
        $hanfeizi->addObservable($wangsi);
        $hanfeizi->haveBreakfast();
    }
}

new Client();