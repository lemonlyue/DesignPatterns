<?php

namespace DesignPatterns\Factory;

use DesignPatterns\Factory\Factory\AddFactory;
use DesignPatterns\Factory\SimpleFactory\Factory;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * Class Client
 * @package DesignPatterns\Factory
 */
class Client
{
    public function run()
    {
        $factory = new Factory();
        $operation = $factory->create('+');
        $operation->setNumberA(1);
        $operation->setNumberB(3);
        return $operation->getResult();
    }

    public function specifiedFactory()
    {
        $factory = new AddFactory();
        $operation = $factory->create();
        $operation->setNumberA(1);
        $operation->setNumberB(3);
        return $operation->getResult();
    }
}

$client = new Client();
var_dump($client->run());
var_dump($client->specifiedFactory());