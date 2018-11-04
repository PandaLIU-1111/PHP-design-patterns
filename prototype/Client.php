<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/4
 * Time: 1:36 PM
 */

require './Mail.php';
require './AdvTemplate.php';

class Client
{
    //发送账单的数量
    private $MAX_COUNT = 6;

    public function __construct()
    {
        $mail = new Mail(new AdvTemplate());
        $mail->setTail('双十一活动专用结尾');
        //这种模式为浅克隆
        for($i = 0; $i < $this->MAX_COUNT; $i++){
            $cloneMail = clone $mail;
            $cloneMail->setTestArray($i);
            $cloneMail->setReceiver($i);
            $cloneMail->setApplelation($i . '先生/女士：');
            $cloneMail->sendEmail();
        }

    }

}

new Client();