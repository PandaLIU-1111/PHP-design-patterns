<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 13:37
 */

require_once './ILetterProcess.php';

class LetterProcessImpl implements ILetterProcess
{
    public function writeContext(string $context)
    {
        // TODO: Implement writeContext() method.
        echo '信封的内容:' . $context . PHP_EOL;
    }

    public function fillEnvelope(string $address)
    {
        // TODO: Implement fillEnvelope() method.
        echo '收件人的地址:' . $address . PHP_EOL;
    }

    public function letterInotoEnvelope()
    {
        // TODO: Implement letterInotoEnvelope() method.
        echo '信封放到邮箱里面' . PHP_EOL;
    }

    public function sendLetter()
    {
        // TODO: Implement sendLetter() method.
        echo '邮递信封'  . PHP_EOL;
    }
}