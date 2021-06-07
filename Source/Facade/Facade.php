<?php


namespace DesignPatterns\Facade;


class Facade
{
    /** @var Camera $camera */
    public $camera;
    
    /** @var Light $light */
    public $light;
    
    /**
     * Facade constructor.
     */
    public function __construct()
    {
        $this->camera = new Camera();
        $this->light = new Light();
    }

    /**
     * 开启
     */
    public function turnOn()
    {
        $this->camera->turnOn();
    }

    /**
     * 拍照
     */
    public function photograph()
    {
        $this->camera->photograph();
        $this->light->turnOn();
        $this->light->turnOff();
    }

    /**
     * 关闭
     */
    public function turnOff()
    {
        $this->camera->turnOff();
    }
}