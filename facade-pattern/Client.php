<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 13:41
 */

require_once './ModenPostOffice.php';

class Client
{
    public function __construct()
    {
        $moden = new ModenPostOffice();
        $moden->sendLetter('hhhhhhhhhhhhhhh','没有地址');
    }
}

new Client();