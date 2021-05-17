<?php


namespace DesignPatterns\Factory;

/**
 * 操作抽象类
 *
 * Class Operation
 * @package DesignPatterns\Factory
 */
abstract class Operation
{
    /**
     * @var int $numberA
     */
    protected $numberA = 0;

    /**
     * @var int $numberB
     */
    protected $numberB = 0;

    /**
     * @param int $numberA
     */
    public function setNumberA($numberA)
    {
        $this->numberA = $numberA;
    }

    /**
     * @param int $numberB
     */
    public function setNumberB($numberB)
    {
        $this->numberB = $numberB;
    }

    /**
     * 获取结果
     *
     * @return int
     */
    abstract public function getResult();
}