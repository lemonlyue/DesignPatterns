<?php


namespace DesignPatterns\Observer;

/**
 * 短信观察者
 * 注册成功发送短信
 * Class SMSObserver
 * @package DesignPatterns\Observer
 */
class SMSObserver implements ObserverInterface
{

    public function update()
    {
        // TODO: Implement update() method.
        echo '注册成功：发送短信通知...' . PHP_EOL;
    }
}