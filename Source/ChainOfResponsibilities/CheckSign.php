<?php


namespace DesignPatterns\ChainOfResponsibilities;

/**
 * 校验签名
 *
 * Class CheckSign
 * @package DesignPatterns\ChainOfResponsibilities
 */
class CheckSign extends Handler
{
    protected function handler()
    {
        echo 'check sign...' . PHP_EOL;
    }
}