<?php


namespace DesignPatterns\Factory\Factory;


use DesignPatterns\Factory\Div;

/**
 * 除法工厂
 * Class DivFactory
 * @package DesignPatterns\Factory\Factory
 */
class DivFactory extends Factory
{

    public function create()
    {
        // TODO: Implement create() method.
        return new Div();
    }
}