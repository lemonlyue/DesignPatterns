<?php


namespace DesignPatterns\Proxy;


class Proxy implements Subject
{
    /**
     * @var RealSubject $realSubject 真实操作
     */
    public $realSubject;

    public function __construct()
    {
        $this->realSubject = new RealSubject();
    }

    public function action()
    {
        // TODO: Implement action() method.
        $this->realSubject->action();
    }
}