<?php


namespace DesignPatterns\Adapter;

/**
 * Class MySQLConnector
 * @package DesignPatterns\Adapter
 */
class MySQLConnector implements ConnectorInterface
{

    public function connect()
    {
        // TODO: Implement connect() method.
        echo 'MySQL connect...' . PHP_EOL;
    }

    public function query()
    {
        // TODO: Implement query() method.
        echo 'MySQL query...' . PHP_EOL;
    }

    public function close()
    {
        // TODO: Implement close() method.
        echo 'MySQL close...';
    }
}