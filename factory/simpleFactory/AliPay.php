<?php

namespace app\factory\simple;

require_once './PaySimpleFactory.php';

class AliPay implements PaySimpleFactory
{

    public function pay()
    {
        // TODO: Implement pay() method.
        echo 'Ali pay' . PHP_EOL;
    }
}