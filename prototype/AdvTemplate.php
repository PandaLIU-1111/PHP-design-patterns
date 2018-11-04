<?php
/**
 * Created by PhpStorm.
 * User: pandaliu
 * Date: 2018/11/4
 * Time: 1:25 PM
 */

class AdvTemplate
{
    //广告信名称
    private $advSubject = 'XX双十一活动';
    //广告内容
    private $advContext = '双十一抽奖活动，快来参加吧';

    /**
     * @return string
     */
    public function getAdvContext(): string
    {
        return $this->advContext;
    }

    /**
     * @return string
     */
    public function getAdvSubject(): string
    {
        return $this->advSubject;
    }
}
