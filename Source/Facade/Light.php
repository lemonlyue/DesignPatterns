<?php


namespace DesignPatterns\Facade;

/**
 * Class Light
 * @package DesignPatterns\Facade
 */
class Light implements LightInterface
{

    public function turnOn()
    {
        // TODO: Implement turnOn() method.
        echo 'Light turn on...' . PHP_EOL;
    }

    public function turnOff()
    {
        // TODO: Implement turnOff() method.
        echo 'Light turn off...' . PHP_EOL;
    }
}