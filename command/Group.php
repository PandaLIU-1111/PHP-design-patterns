<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/5
 * Time: 14:04
 */

abstract class Group
{
    abstract public function find();

    abstract public function add();

    abstract public function delete();

    abstract public function change();

    abstract public function plan();

}