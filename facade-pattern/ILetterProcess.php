<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 13:34
 */

interface ILetterProcess
{
    //写信内容
    public function writeContext(string $context);

    //写信封
    public function fillEnvelope(string $address);

    //把信封放假邮箱
    public function letterInotoEnvelope();

    //发送信封
    public function sendLetter();
}