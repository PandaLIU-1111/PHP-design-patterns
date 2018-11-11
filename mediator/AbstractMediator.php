<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/4
 * Time: 2:40 PM
 */
abstract class AbstractMediator
{
    protected $purchase;
    protected $sale;
    protected $stock;

    public function __construct()
    {
        $this->purchase = new Purchase();
        $this->sale = new Sale();
        $this->stock = new Stock();
    }

    public abstract function execute();
}