<?php


namespace DesignPatterns\Factory\AbstractFactory;

/**
 * Class MySQLUser
 * @package DesignPatterns\Factory\AbstractFactory
 */
class MySQLUser implements Operation
{

    public function insert()
    {
        // TODO: Implement insert() method.
        echo '插入 User';
    }

    public function select()
    {
        // TODO: Implement select() method.
        echo '查询 User';
    }
}