<?php


namespace DesignPatterns\Adapter;

/**
 * Class PostgresqlConnector
 * @package DesignPatterns\Adapter
 */
class PostgresqlConnector implements ConnectorInterface
{

    public function connect()
    {
        // TODO: Implement connect() method.
        echo 'Postgresql connect...' . PHP_EOL;
    }

    public function query()
    {
        // TODO: Implement query() method.
        echo 'Postgresql query...' . PHP_EOL;
    }

    public function close()
    {
        // TODO: Implement close() method.
        echo 'Postgresql close...' . PHP_EOL;
    }
}