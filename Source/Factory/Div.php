<?php


namespace DesignPatterns\Factory;

/**
 * 除法
 *
 * Class Div
 * @package DesignPatterns\Factory
 */
class Div extends Operation
{

    public function getResult()
    {
        if ($this->numberA === 0) {
            throw new \InvalidArgumentException('除数不可为零');
        }
        return $this->numberA / $this->numberB;
    }
}