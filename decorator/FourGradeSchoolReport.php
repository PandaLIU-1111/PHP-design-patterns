<?php
/**
 * Created by PhpStorm.
 * User: Windows
 * Date: 2018/11/7
 * Time: 13:32
 */
require_once './SchoolReport.php';

class FourGradeSchoolReport extends SchoolReport
{

    public function report()
    {
        // TODO: Implement report() method.
        echo
            '尊敬的XXX家长：' . PHP_EOL .
            '........'. PHP_EOL .
            '语文62  数学67  体育100  自然66' . PHP_EOL .
            '........'. PHP_EOL .
            '               家长签名：'. PHP_EOL;
    }

    public function sign(string $name)
    {
        // TODO: Implement sign() method.
        echo '家长签名为：' . $name . PHP_EOL;
    }
}