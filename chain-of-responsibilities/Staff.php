<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/6
 * Time: 13:56
 */

class Staff implements IStaff
{

    /**
     * 请假天数
     * @var int
     */
    private $day = 0;

    /**
     * 请假原因
     */
    private $request = '';

    public function __construct($day,$request)
    {
        $this->day = $day;
        $this->request = $request;
    }

    public function getResponse()
    {
        // TODO: Implement getResponse() method.
        return $this->request;
    }
    public function getDay()
    {
        // TODO: Implement getType() method.
        return $this->day;
    }
}