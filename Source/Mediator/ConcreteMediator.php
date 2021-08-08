<?php


namespace DesignPatterns\Mediator;

/**
 * 具体中介类
 *
 * Class ConcreteAbstractMediator
 * @package DesignPatterns\Mediator
 */
class ConcreteMediator extends AbstractMediator
{
    /**
     * 事件方法, 处理多个对象之间的关系
     *
     * @param string $classAlias
     * @param string $method 方法名
     * @param array $args
     * @return mixed|void
     */
    public function execute(string $classAlias, string $method, ...$args)
    {
        return $this->{$classAlias}->{$method}(...$args);
    }
}