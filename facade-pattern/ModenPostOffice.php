<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 13:41
 */

require_once './LetterProcessImpl.php';
require_once './Pilice.php';

class ModenPostOffice
{
    private $lettterProcesslmpl;

    public function __construct()
    {
        $this->lettterProcesslmpl = new LetterProcessImpl();
    }

    public function sendLetter(string $context,string $address)
    {
        $this->lettterProcesslmpl->writeContext($context);
        $this->lettterProcesslmpl->fillEnvelope($address);
        (new Pilice())->checkLetter();
        $this->lettterProcesslmpl->letterInotoEnvelope();
        $this->lettterProcesslmpl->sendLetter();
    }

}