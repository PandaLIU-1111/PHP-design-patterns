<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/10/27
 * Time: 12:11 PM
 */


/**
 * 由于PHP是单线程脚本，不需要考虑并发时会失败
 */

/**
 * 单例模式
 * Class single
 */
class single
{
    private $obj = null;

    public function __construct()
    {
        if($this->obj == null){
            $this->obj = new single();
        }
        return $this->obj;
    }

}