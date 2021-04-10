<?php


namespace DesignPatterns\Observer;

/**
 * 积分观察者
 * 注册成功赠送积分
 * Class IntegralObserver
 * @package DesignPatterns\Observer
 */
class IntegralObserver implements ObserverInterface
{

    public function update()
    {
        // TODO: Implement update() method.
        echo '注册成功：赠送积分...' . PHP_EOL;
    }
}