<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/1
 * Time: 10:46 PM
 */

class person
{
    public $name;
    public $age;
    public $gender;

    public function __construct()
    {
    }

    public function say()
    {
        echo $this->name," \tis ",$this->gender,"\r\n";
    }

    public function set($name, $value)
    {
        echo "Setting $name to $value \r\n";
        $this->$name = $value;
    }

    public function get($name)
    {
        if (!isset($this->$name)) {
            echo '未设置';
            $this->$name = "正在为你设置默认值";
        }
        return $this->$name;
    }
}

$student = new person();
$student->name = 'LIU';
$student->age = '12';
$student->gender = '男';
