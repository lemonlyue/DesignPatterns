<?php


namespace DesignPatterns\Factory;

/**
 * 工厂
 *
 * Class Factory
 * @package DesignPatterns\Factory
 */
class Factory
{
    /**
     * 创建运算
     *
     * @param string $operate
     * @return Add|Div|Mul|Sub
     */
    public function create($operate)
    {
        switch ($operate) {
            case '+':
                $result = new Add();
                break;
            case '-';
                $result = new Sub();
                break;
            case '*';
                $result = new Mul();
                break;
            case '/':
                $result = new Div();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持该运算');
        }
        return $result;
    }
}