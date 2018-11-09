<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/9
 * Time: 14:23
 */

require_once './Memento.php';

class Caretaker
{
    private $memento;

    /**
     * @return mixed
     */
    public function getMemento()
    {
        return $this->memento;
    }

    /**
     * @param mixed $memento
     */
    public function setMemento(Memento $memento): void
    {
        $this->memento = $memento;
    }
}