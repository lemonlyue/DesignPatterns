<?php


namespace DesignPatterns\Factory\AbstractFactory;


class MySQLFactory implements Factory
{

    public function createUser()
    {
        // TODO: Implement createUser() method.
        return new MySQLUser();
    }

    public function createArticle()
    {
        // TODO: Implement createArticle() method.
        return new MySQLArticle();
    }
}