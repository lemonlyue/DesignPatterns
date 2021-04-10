<?php


namespace DesignPatterns\Proxy;

/**
 * Class RealSubject
 * @package DesignPatterns\Proxy
 */
class RealSubject implements Subject
{

    public function action()
    {
        // TODO: Implement action() method.
        echo '真实操作' . PHP_EOL;
    }
}