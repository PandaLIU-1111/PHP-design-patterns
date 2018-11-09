<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 14:19
 */

require_once './Memento.php';

class Originator
{

    //内部状态
    private $status = '';

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    //创建一个备份
    public function createMemento()
    {
        return new Memento($this->getStatus());
    }

    public function restoreMemento(Memento $memento)
    {
        $this->setStatus($memento->getStatus());
    }
}