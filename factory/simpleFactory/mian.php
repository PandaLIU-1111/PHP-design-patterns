<?php
namespace app\factory\simple;

require './SimpleFactory.php';


$ali = SimpleFactory::pay('Ali');
//var_dump($pay);
$ali->pay();


$wechat = SimpleFactory::pay('Wechat');
$wechat->pay();

$test = SimpleFactory::pay('pay');
$test->pay();