<?php


namespace DesignPatterns\Adapter;

/**
 * Class MySQLiConnector
 * @package DesignPatterns\Adapter
 */
class MySQLiConnector implements ConnectorInterface
{

    public function connect()
    {
        // TODO: Implement connect() method.
        echo 'MySQLi connect...' . PHP_EOL;
    }

    public function query()
    {
        // TODO: Implement query() method.
        echo 'MySQLi query...' . PHP_EOL;
    }

    public function close()
    {
        // TODO: Implement close() method.
        echo 'MySQLi close...' . PHP_EOL;
    }
}