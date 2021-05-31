<?php


namespace DesignPatterns\Adapter;

/**
 * 连接器接口
 *
 * Interface ConnectorInterface
 * @package DesignPatterns\Adapter
 */
interface ConnectorInterface
{
    public function connect();

    public function query();

    public function close();
}