<?php


namespace DesignPatterns\Factory\Factory;


use DesignPatterns\Factory\Sub;

/**
 * 减法工厂
 *
 * Class SubFactory
 * @package DesignPatterns\Factory\Factory
 */
class SubFactory extends Factory
{

    public function create()
    {
        // TODO: Implement create() method.
        return new Sub();
    }
}