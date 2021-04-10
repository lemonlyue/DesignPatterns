<?php


namespace DesignPatterns\Observer;


use SplObserver;

class Subject extends SubjectAbstract
{
    public function publish()
    {
        echo '注册成功' . PHP_EOL;
        $this->notify();
    }
}