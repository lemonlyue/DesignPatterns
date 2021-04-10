<?php


namespace DesignPatterns\Observer;


class SMSObserver implements ObserverInterface
{

    public function update()
    {
        // TODO: Implement update() method.
        echo '注册成功：发送短信通知...' . PHP_EOL;
    }
}