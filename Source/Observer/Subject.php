<?php


namespace DesignPatterns\Observer;


use SplObserver;

/**
 * 具体类
 * Class Subject
 * @package DesignPatterns\Observer
 */
class Subject extends SubjectAbstract
{
    /**
     * 注册
     */
    public function register()
    {
        echo '注册成功' . PHP_EOL;
        $this->notify();
    }
}