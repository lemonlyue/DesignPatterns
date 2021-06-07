<?php


namespace DesignPatterns\Facade;

/**
 * 照相机
 *
 * Interface CameraInterface
 * @package DesignPatterns\Facade
 */
interface CameraInterface
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

    /**
     * 拍照
     *
     * @return mixed
     */
    public function photograph();
}