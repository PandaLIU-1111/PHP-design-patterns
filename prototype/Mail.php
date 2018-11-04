<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/4
 * Time: 1:28 PM
 */

class Mail
{
    //收件人
    private $receiver;
    //邮件名称
    private $subject;
    //称谓
    private $applelation;
    //邮件内容
    private $content;
    //邮件尾部
    private $tail;

    private $testArray = [];

    public function __construct(AdvTemplate $advTemplate)
    {
        $this->content = $advTemplate->getAdvContext();
        $this->subject = $advTemplate->getAdvSubject();
    }

    public function sendEmail(){
        echo "=====================================================" . PHP_EOL;
        echo "收件人：" . $this->receiver . PHP_EOL;
        echo "邮件名称：" . $this->subject . PHP_EOL;
        echo "称谓：" . $this->applelation . PHP_EOL;
        echo "邮件内容" . $this->content . PHP_EOL;
        echo "邮件尾部" . $this->tail . PHP_EOL;
        var_dump($this->getTestArray());
        echo "=====================================================" . PHP_EOL;
    }

    /**
     * @param mixed $applelation
     */
    public function setApplelation($applelation): void
    {
        $this->applelation = $applelation;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @param mixed $receiver
     */
    public function setReceiver($receiver): void
    {
        $this->receiver = $receiver;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @param mixed $tail
     */
    public function setTail($tail): void
    {
        $this->tail = $tail;
    }

    /**
     * @return mixed
     */
    public function getApplelation()
    {
        return $this->applelation;
    }

    /**
     * @return mixed
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return mixed
     */
    public function getTail()
    {
        return $this->tail;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return array
     */
    public function getTestArray(): array
    {
        return $this->testArray;
    }

    /**
     * @param array $testArray
     */
    public function setTestArray($testArray)
    {
        $this->testArray[] = $testArray;
    }

}