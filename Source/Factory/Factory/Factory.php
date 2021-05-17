<?php


namespace DesignPatterns\Factory\Factory;

/**
 * 抽象工厂类
 *
 * Class Factory
 * @package DesignPatterns\Factory\Factory
 */
abstract class Factory
{
    /**
     * 创建运算
     *
     * @return mixed
     */
    abstract public function create();
}