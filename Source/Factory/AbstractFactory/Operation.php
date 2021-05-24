<?php


namespace DesignPatterns\Factory\AbstractFactory;

/**
 * Interface Operation
 * @package DesignPatterns\Factory\AbstractFactory
 */
interface Operation
{
    /**
     * @return mixed
     */
    public function insert();

    /**
     * @return mixed
     */
    public function select();

}