<?php

namespace DesignPatterns\Facade;

require '../../vendor/autoload.php';

/**
 * Class Client
 * @package DesignPatterns\Facade
 */
class Client
{
    public function run()
    {
        try {
            $facade = new Facade();
            $facade->turnOn();
            $facade->photograph();
            $facade->turnOff();

        } catch (\Throwable $throwable) {
            echo $throwable->getMessage();
        }
    }
}

$client = new Client();
$client->run();