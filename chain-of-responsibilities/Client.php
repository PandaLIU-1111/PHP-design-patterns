<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/6
 * Time: 13:50
 */

require './IHandler.php';
require './Handler.php';
require './Manager.php';
require './TeamLear.php';
require './CEO.php';
require './IStaff.php';
require './Staff.php';



class Client
{
    public function __construct()
    {
        $staffArray = [];
        for ($i = 0;$i < 5;++$i){
            $staffArray[] = new Staff(random_int(1,4),"就是要请假");
        }

        $ceo = new CEO();
        $teamLear = new TeamLear();
        $manager = new Manager();

        $teamLear->setNext($manager);
        $manager->setNext($ceo);
        foreach ($staffArray as $item){
            $teamLear->handlerMessage($item);
            echo '===================================' . PHP_EOL;
        }

//        foreach ($staffArray as $item){
//            switch ($item->getDay()){
//                case 1:
//                    $teamLear->handlerMessage($item);
//                    break;
//                case 2:
//                    $manager->handlerMessage($item);
//                    break;
//                case 3:
//                    $ceo->handlerMessage($item);
//                    break;
//                default:
//                    echo '都不同意';
//            }
//            echo PHP_EOL . "============================================" . PHP_EOL;
//        }

    }
}

new Client();