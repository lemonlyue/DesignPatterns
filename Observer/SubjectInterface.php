<?php


namespace DesignPatterns\Observer;

/**
 * SubjectInterface 接口
 * Interface SubjectInterface
 * @package DesignPatterns\Observer
 */
interface SubjectInterface
{
    /**
     * 绑定
     * @param ObserverInterface $observer
     * @return mixed
     */
    public function attach(ObserverInterface $observer);

    /**
     * 通知
     * @return mixed
     */
    public function notify();
}