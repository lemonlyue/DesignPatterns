<?php


namespace DesignPatterns\ChainOfResponsibilities;

/**
 * 校验token
 *
 * Class CheckToken
 * @package DesignPatterns\ChainOfResponsibilities
 */
class CheckToken extends Handler
{
    protected function handler()
    {
        echo 'check token...' . PHP_EOL;
    }
}