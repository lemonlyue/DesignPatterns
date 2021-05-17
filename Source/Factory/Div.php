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
        return $this->numberA / $this->numberB;
    }
}