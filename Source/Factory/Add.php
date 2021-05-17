<?php


namespace DesignPatterns\Factory;


/**
 * 加法
 *
 * Class Add
 * @package DesignPatterns\Factory
 */
class Add extends Operation
{
    public function getResult()
    {
        return $this->numberA + $this->numberB;
    }
}