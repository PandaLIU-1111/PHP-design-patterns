<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/4
 * Time: 2:43 PM
 */

class Stock
{
    private $COMPUTER_NUMBER = 100;

    public function increase($number)
    {
        $this->COMPUTER_NUMBER += $number;
        echo "当前库存量为：" . $this->COMPUTER_NUMBER . PHP_EOL;
    }

    public function decrease($number)
    {
        $this->COMPUTER_NUMBER -= $number;
        echo "当前库存量为：" . $this->COMPUTER_NUMBER . PHP_EOL;
    }

    /**
     * @return int
     */
    public function getStockNumber(): int
    {
        return $this->COMPUTER_NUMBER;
    }

    public function clearStock()
    {

    }
}