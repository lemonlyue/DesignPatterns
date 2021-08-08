<?php


namespace DesignPatterns\Mediator;


/**
 * 抽象同事
 *
 * Class AbstractColleague
 * @package DesignPatterns\AbstractMediator
 */
abstract class AbstractColleague
{
    /**
     * @var AbstractMediator $mediator
     */
    protected $mediator;

    /**
     * 设置中介者
     *
     * @param AbstractMediator $mediator 中介者
     */
    public function setMediator(AbstractMediator $mediator)
    {
        $this->mediator = $mediator;
    }
}