<?php


namespace DesignPatterns\Observer;

/**
 * 观察者接口
 * Interface ObserverInterface
 * @package DesignPatterns\Observer
 */
interface ObserverInterface
{
    /**
     * 更新
     * @return mixed
     */
    public function update();
}