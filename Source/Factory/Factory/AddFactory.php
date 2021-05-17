<?php


namespace DesignPatterns\Factory\Factory;


use DesignPatterns\Factory\Add;

/**
 * 加法工厂
 *
 * Class AddFactory
 * @package DesignPatterns\Factory\Factory
 */
class AddFactory extends Factory
{
    /**
     * @return Add|mixed
     */
    public function create()
    {
        // TODO: Implement create() method.
        return new Add();
    }
}