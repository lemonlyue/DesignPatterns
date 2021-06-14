<?php

namespace DesignPatterns\Registry;

require '../../vendor/autoload.php';

/**
 * Class Client
 * @package DesignPatterns\Registry
 */
class Client
{
    public function run()
    {
        $registry = Registry::instance();
        $registry->set('test', new Test());
        $registry->set('test2', new Test2());
        var_dump($registry->get('test'));
        var_dump($registry->get('test2'));
    }
}

class Test
{

}

class Test2
{

}

$client = new Client();
$client->run();