<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/7
 * Time: 11:20
 */


abstract class SchoolReport
{
    //成绩单展示
    public abstract function report();
    //签名
    public abstract function sign(string $name);
}