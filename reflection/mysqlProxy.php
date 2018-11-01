<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/1
 * Time: 11:17 PM
 */
class mysql
{
    function connect($db)
    {
        echo '连接到数据库' . $db . PHP_EOL;
    }
}

class mysqlProxy
{
    private $target;

    function __construct($tar)
    {
        $this->target[] = new $tar;
    }

    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        foreach ($this->target as $obj) {
            $r = new ReflectionClass($obj);
            if($method = $r->getMethod($name)){
                if($method->isPublic() && !$method->isAbstract()){
                    echo '方法前拦截记录LOG📝' . PHP_EOL;
                    $method->invokeArgs($obj,$arguments);
                    echo '方法后拦截记录LOG' . PHP_EOL;
                }
            }
        }
    }
}

$obj = new mysqlProxy('mysql');
$obj->connect('test');
