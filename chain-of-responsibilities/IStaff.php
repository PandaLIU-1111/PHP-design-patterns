<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/6
 * Time: 13:51
 */

interface IStaff
{
    //获取自己的状态
    public function getDay();

    //获取个人请示，你要干什么
    public function getResponse();
}