<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/6
 * Time: 14:47
 */

abstract class Handler
{
    const TEAM_LEADER_REQUEST = 1;
    const MANAGER_REQUEST = 2;
    const CEO_REQUEST = 3;

    //能处理的天数
    private $level = 0;

    //责任传递，下一个责任人是谁
    private $nextHandler;

    public function __construct($level)
    {
        $this->level = $level;
    }

    public final function handlerMessage(IStaff $staff)
    {
        if($staff->getDay() == $this->level){
            $this->response($staff);
        }else{
//            var_dump($this->nextHandler);
//            die();
            if (isset($this->nextHandler)){
                $this->nextHandler->handlerMessage($staff);
            }else{
                echo '没地方请示了，所以不同意' . PHP_EOL;
            }

        }
    }

    public function setNext(Handler $handler)
    {
        $this->nextHandler = $handler;
    }

    protected abstract function response(IStaff $staff);

}