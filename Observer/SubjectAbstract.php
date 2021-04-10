<?php


namespace DesignPatterns\Observer;

/**
 * Observer 抽象类
 * Class SubjectAbstract
 * @package DesignPatterns\Observer
 */
abstract class SubjectAbstract implements SubjectInterface
{
    /**
     * @var array $observsers 观察者
     */
    public $observsers = [];

    /**
     * @param ObserverInterface $observer
     * @return mixed|void
     */
    public function attach(ObserverInterface $observer)
    {
        $this->observsers[] = $observer;
    }

    /**
     * @return mixed|void
     */
    public function notify()
    {
        foreach ($this->observsers as $observser) {
            /** @var ObserverInterface $observser */
            $observser->update();
        }
    }

}