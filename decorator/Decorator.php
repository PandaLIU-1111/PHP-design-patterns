<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/7
 * Time: 13:55
 */

require_once './SchoolReport.php';

abstract class Decorator extends SchoolReport
{
    private $sr;

    public function __construct(SchoolReport $sr)
    {
        $this->sr = $sr;
    }

    public function report()
    {
        // TODO: Implement report() method.
        $this->sr->report();
    }

    public function sign(string $name)
    {
        // TODO: Implement sign() method.
        $this->sr->sign($name);
    }

}