<?php


namespace DesignPatterns\ChainOfResponsibilities;

/**
 * 校验权限
 *
 * Class CheckPermission
 * @package DesignPatterns\ChainOfResponsibilities
 */
class CheckPermission extends Handler
{
    protected function handler()
    {
        echo 'check permission...' . PHP_EOL;
    }
}