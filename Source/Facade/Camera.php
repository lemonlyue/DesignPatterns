<?php


namespace DesignPatterns\Facade;

/**
 * Class Camera
 * @package DesignPatterns\Facade
 */
class Camera implements CameraInterface
{

    public function turnOn()
    {
        // TODO: Implement turnOn() method.
        echo 'camera turn on...' . PHP_EOL;
    }

    public function turnOff()
    {
        // TODO: Implement turnOff() method.
        echo 'camera turn off...' . PHP_EOL;
    }

    public function photograph()
    {
        // TODO: Implement photograph() method.
        echo 'camera photograph...' . PHP_EOL;
    }
}