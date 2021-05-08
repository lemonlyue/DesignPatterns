<?php


namespace DesignPatterns\Singleton;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * Class Client
 * @package DesignPatterns\Singleton
 */
class Client
{
    public function run()
    {
        $db = DB::getInstance();
        var_dump($db);
    }
}

$client = new Client();
$client->run();