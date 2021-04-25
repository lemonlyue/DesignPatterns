<?php


namespace DesignPatterns\ChainOfResponsibilities;

/**
 * Class Middleware
 * @package DesignPatterns\ChainOfResponsibilities
 */
class Middleware
{
    /** @var array $middlewareConfig */
    protected $middlewareConfig;

    /** @var Handler $handler */
    protected $handler;

    /** @var Handler $currentHandler */
    protected $currentHandler;

    /**
     * RegisterMiddleware constructor.
     * @param $middlewareConfig
     */
    public function __construct($middlewareConfig)
    {
        $this->middlewareConfig = $middlewareConfig;
        $this->build();
    }

    /**
     * 构建责任链
     */
    public function build()
    {
        foreach ($this->middlewareConfig as $key => $item) {
            $next = $this->middlewareConfig[$key + 1] ?: null;
            if (empty($this->handler)) {
                $this->handler = new $item();
                if (!empty($next)) {
                    $this->currentHandler = new $next();
                    $this->handler->setNextHandler($this->currentHandler);
                }
            } else if (!empty($next)) {
                $nextHandler = new $next();
                $this->currentHandler->setNextHandler($nextHandler);
                $this->currentHandler = $nextHandler;
            }
        }
        $this->handler->handlerMessage();
    }
}