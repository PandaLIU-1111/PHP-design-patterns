<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/1
 * Time: 10:50 PM
 */

include './person.php';

//获取对象属性列表
$reflection = new ReflectionObject(new person());
$props = $reflection->getProperties();
foreach ($props as $prop){
    echo $prop->getName() , PHP_EOL;
}

//获取对象的方法
$methods = $reflection->getMethods();
foreach ($methods as $method){
    echo $method->getName() , PHP_EOL;
}

$obj = new ReflectionClass('person');
$className = $obj->getName();
$Methods = $Properties = array();
foreach ($obj->getProperties() as $v){
    $Properties[$v->getName()] = $v;
}

foreach ($obj->getMethods() as $method){
    $Methods[$method->getName()] = $method;
}

echo "className {$className}" . PHP_EOL;
echo '{' . PHP_EOL;
foreach ($Properties as $key => $value){
    echo "\t";
    echo $value->isStatic() ? ' static' : '';
    echo $value->isPublic() ? 'public' : '',
        $value->isPrivate() ? 'private' : '',
        $value->isProtected() ? ' protected' : '';
    echo "\t\${$key};\n";
}

echo PHP_EOL;
if(is_array($Methods)) ksort($Methods);
foreach ($Methods as $key => $value){
    echo "\t";
    echo $value->isStatic() ? ' static' : '';
    echo $value->isPublic() ? 'public' : '',
    $value->isPrivate() ? 'private' : '',
    $value->isProtected() ? ' protected' : '';
    echo " ";
    echo "function $key()" , PHP_EOL;
    echo "\t{", PHP_EOL;

    echo "\t}", PHP_EOL;
    echo PHP_EOL;
}
echo "}\n";
