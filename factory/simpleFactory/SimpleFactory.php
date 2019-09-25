<?php

namespace app\factory\simple;

require './AliPay.php';
require './WechatPay.php';


class SimpleFactory
{
    public static function pay($platform)
    {
        switch ($platform) {
            case 'Ali':
                $result = new AliPay();
                break;
            case 'Wechat':
                $result = new WechatPay();
                break;
            default:
                throw new \InvalidArgumentException('暂时不支持该平台');
        }

        return $result;
    }
}