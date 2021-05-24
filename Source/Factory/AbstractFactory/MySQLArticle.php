<?php


namespace DesignPatterns\Factory\AbstractFactory;

/**
 * Class MySQLArticle
 * @package DesignPatterns\Factory\AbstractFactory
 */
class MySQLArticle implements Operation
{

    public function insert()
    {
        // TODO: Implement insert() method.
        echo '插入 Article';
    }

    public function select()
    {
        // TODO: Implement select() method.
        echo '查询 Article';
    }
}