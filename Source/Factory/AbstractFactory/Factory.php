<?php


namespace DesignPatterns\Factory\AbstractFactory;

/**
 * Interface Factory
 * @package DesignPatterns\Factory\AbstractFactory
 */
interface Factory
{
    /**
     * @return mixed
     */
    public function createUser();

    /**
     * @return mixed
     */
    public function createArticle();
}