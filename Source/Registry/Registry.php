<?php


namespace DesignPatterns\Registry;

/**
 * 注册模式
 *
 * Class Registry
 * @package DesignPatterns\Registry
 */
class Registry
{
    /** @var array $tree 注册树 */
    protected static $tree = [];

    /** @var $instance */
    private static $instance;

    /**
     * instance
     */
    public static function instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * get
     *
     * @param string $key
     * @return mixed|null
     */
    public function get(string $key)
    {
        return self::$tree[$key] ?? null;
    }

    /**
     * set
     *
     * @param string $key
     * @param $value
     * @return bool
     */
    public function set(string $key, $value)
    {
        self::$tree[$key] = $value;
        return true;
    }
}