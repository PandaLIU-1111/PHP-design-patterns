<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/8
 * Time: 14:05
 */

require_once './Branch.php';
require_once './Leaf.php';

class Client
{
    public function __construct()
    {
        $this->compositeCorpTree();
    }

    private function compositeCorpTree()
    {
        $ceo = new Branch('张大大','CEO','10000000');
        $developDep = new Branch('隔壁老王','开发经理','2000000');
        $salesDep = new Branch('隔壁老张','销售经理','2000000');
        $financDep = new Branch('隔壁老黄','财务经理','2000000');
        $firstDevGroup = new Branch('隔壁老赵','开发一组组长','20000');
        $secondDevGroup = new Branch('隔壁老吴','开发二组组长','20000');

        $a = new Leaf('A','开发人员','200');
        $b = new Leaf('B','开发人员','200');
        $c = new Leaf('C','开发人员','200');
        $d = new Leaf('D','开发人员','200');
        $e = new Leaf('E','开发人员','200');
        $f = new Leaf('F','开发人员','200');
        $g = new Leaf('G','开发人员','200');
        $h = new Leaf('H','销售人员','200');
        $i = new Leaf('I','销售人员','200');
        $j = new Leaf('J','销售人员','200');
        $k = new Leaf('K','销售人员','200');
        $l = new Leaf('L','财务人员','200');
        $m = new Leaf('M','秘书','200');

        $ceo->addBranch($developDep);
        $ceo->addBranch($salesDep);
        $ceo->addBranch($financDep);
        $ceo->addLeaf($m);
        $developDep->addBranch($firstDevGroup);
        $developDep->addBranch($secondDevGroup);
        $firstDevGroup->addLeaf($a);
        $firstDevGroup->addLeaf($b);
        $firstDevGroup->addLeaf($c);
        $firstDevGroup->addLeaf($d);
        $firstDevGroup->addLeaf($e);
        $secondDevGroup->addLeaf($f);
        $secondDevGroup->addLeaf($g);
        $salesDep->addLeaf($h);
        $salesDep->addLeaf($i);
        $salesDep->addLeaf($j);
        $salesDep->addLeaf($k);
        $financDep->addLeaf($l);
        $ceo->getInfo();
        $this->getAllSubirdinateInfo($ceo->getSubordinateInfo());
    }

    private function getAllSubirdinateInfo($subordinate)
    {
        foreach ($subordinate as $value){
            if($value instanceof Leaf){
                $value->getInfo();
            }else{
                $value->getInfo();
                $s = $value->getSubordinateInfo();
                $this->getAllSubirdinateInfo($s);
            }

        }
    }

}

new Client();