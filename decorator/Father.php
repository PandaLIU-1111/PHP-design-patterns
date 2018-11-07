<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/7
 * Time: 13:39
 */

require_once './SugarFourGradeSchoolReport.php';
require_once './HighScoreDecorator.php';
require_once './SortDecorator.php';
require_once './FourGradeSchoolReport.php';

class Father
{
    public function __construct()
    {
        $sr = new FourGradeSchoolReport();
        $sr = new HighScoreDecorator($sr);
        $sr = new SortDecorator($sr);

        $sr->report();
        $sr->sign('xxxx');
    }
}

new Father();