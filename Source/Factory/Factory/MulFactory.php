<?php


namespace DesignPatterns\Factory\Factory;


use DesignPatterns\Factory\Mul;

/**
 * 乘法工厂
 *
 * Class MulFactory
 * @package DesignPatterns\Factory\Factory
 */
class MulFactory extends Factory
{

    public function create()
    {
        // TODO: Implement create() method.
        return new Mul();
    }
}