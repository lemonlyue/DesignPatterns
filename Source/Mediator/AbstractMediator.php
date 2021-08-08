<?php


namespace DesignPatterns\Mediator;

/**
 * 抽象中介
 *
 * Interface AbstractMediator
 * @package DesignPatterns\AbstractMediator
 */
abstract class AbstractMediator
{
    /**
     * 事件方法, 处理多个对象之间的关系
     *
     * @param string $classAlias 类别名
     * @param string $method 方法名
     * @param array $args 参数
     * @return mixed
     */
    abstract public function execute(string $classAlias, string $method, ...$args);

    /**
     * 设置同事类
     *
     * @param AbstractColleague $colleague 同事类
     * @param string $classAlias 别名
     */
    public function setColleague(AbstractColleague $colleague, string $classAlias)
    {
        $this->{$classAlias} = $colleague;
    }
}