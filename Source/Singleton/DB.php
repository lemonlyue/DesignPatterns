<?php


namespace DesignPatterns\Singleton;

/**
 * 单例模式
 * Class DB
 * @package DesignPatterns\Singleton
 */
class DB
{
    /**
     * 实例
     * @var null $instance
     */
    private static $instance = null;

    /**
     * @return null
     */
    public static function getInstance()
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * 私有化方法
     * 防止实例化
     * DB constructor.
     */
    private function __construct()
    {
        
    }

    /**
     * 防止克隆
     */
    private function __clone()
    {

    }

    /**
     * 防止反序列化
     */
    private function __wakeup()
    {

    }
}