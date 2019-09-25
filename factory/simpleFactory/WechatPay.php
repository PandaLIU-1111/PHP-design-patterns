<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2019/9/25
 * Time: 9:31 PM
 */

namespace app\factory\simple;

require_once  './PaySimpleFactory.php';

class WechatPay implements PaySimpleFactory
{

    public function pay()
    {
        // TODO: Implement pay() method.
        echo 'wechat pay' . PHP_EOL;
    }
}