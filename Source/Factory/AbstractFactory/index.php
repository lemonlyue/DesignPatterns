<?php

namespace DesignPatterns\Factory\AbstractFactory;


require __DIR__ . '/../../../vendor/autoload.php';

/**
 * Class Client
 * @package DesignPatterns\Factory
 */
class Client
{
    public function run()
    {
        // 使用 MySQL
        $factory = new MySQLFactory();
        // 创建 user
        $user = $factory->createUser();
        $user->insert();
        echo PHP_EOL;
        $user->select();

        echo PHP_EOL;

        $factory = new MySQLFactory();
        // 创建 article
        $article = $factory->createArticle();
        $article->insert();
        echo PHP_EOL;
        $article->select();
    }
}

$client = new Client();
$client->run();