<?php


namespace DesignPatterns\Observer;


class IntegralObserver implements ObserverInterface
{

    public function update()
    {
        // TODO: Implement update() method.
        echo '注册成功：赠送积分...' . PHP_EOL;
    }
}