<?php


namespace DesignPatterns\Factory;

/**
 * 减法
 *
 * Class Sub
 * @package DesignPatterns\Factory
 */
class Sub extends Operation
{
    public function getResult()
    {
        return $this->numberA - $this->numberB;
    }
}