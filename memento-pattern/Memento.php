<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 14:21
 */

class Memento
{
    //内部状态
    private $status = '';

    public function __construct($status)
    {
        $this->status = $status;
    }

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
}