<?php


namespace DesignPatterns\Factory;

/**
 * 乘法
 *
 * Class Mul
 * @package DesignPatterns\Factory
 */
class Mul extends Operation
{

    public function getResult()
    {
        return $this->numberA * $this->numberB;
    }
}