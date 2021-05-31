<?php
namespace DesignPatterns\Adapter;

require '../../vendor/autoload.php';

class Client
{
    public function run()
    {
        $mysql = new MySQLConnector();
        $mysql->connect();
        $mysql->query();
        $mysql->connect();

        $mysqli = new MySQLiConnector();
        $mysqli->connect();
        $mysqli->query();
        $mysqli->close();

        $postgreSql = new PostgresqlConnector();
        $postgreSql->connect();
        $postgreSql->query();
        $postgreSql->close();
    }
}

$client = new Client();
$client->run();