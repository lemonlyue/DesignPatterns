<?php


namespace DesignPatterns\ChainOfResponsibilities;

/**
 * Class MiddlewareHandler
 * @package Middleware
 */
abstract class Handler
{
    /** @var Handler|null $nextHandler 下一个处理者 */
    private $nextHandler;

    /**
     * @desc 处理方法
     * @return mixed
     */
    abstract protected function handler();

    /**
     * @desc 设置下一个处理者
     * @param Handler $handler
     * @return $this
     */
    public function setNextHandler(Handler $handler)
    {
        $this->nextHandler = $handler;
        return $this;
    }

    /**
     * 责任链实现方法
     */
    final public function handlerMessage()
    {
        $this->handler();
        if (!empty($this->nextHandler)) {
            $this->nextHandler->handlerMessage();
        }
    }
}