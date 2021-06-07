<?php


namespace DesignPatterns\Facade;

/**
 * 闪光灯
 *
 * Interface LightInterface
 * @package DesignPatterns\Facade
 */
interface LightInterface
{
    /**
     * 打开
     *
     * @return mixed
     */
    public function turnOn();

    /**
     * 关闭
     *
     * @return mixed
     */
    public function turnOff();
}