<?php


namespace DesignPatterns\Mediator\Example;

/**
 * 库存
 *
 * Class Stock
 * @package DesignPatterns\Mediator
 */
class Stock
{
    /**
     * @var array $productStock 商品库存
     */
    private $productStock = [];

    /**
     * 增加库存
     *
     * @param string $name
     * @param int $number
     * @return bool
     */
    public function increase(string $name, int $number)
    {
        $this->productStock[$name] += $number;
        echo $name . '库存增加' . $number . PHP_EOL;
        return true;
    }

    /**
     * 减少库存
     *
     * @param string $name
     * @param int $number
     * @return bool
     */
    public function decrease(string $name, int $number)
    {
        $this->productStock[$name] -= $number;
        echo $name . '库存减少' . $number . PHP_EOL;
        return true;
    }

    /**
     * 获取库存数量
     *
     * @param string $name
     * @return mixed
     */
    public function getStock(string $name)
    {
        $stock = $this->productStock[$name] ?? 0;
        echo $name . '当前库存为' . $stock . PHP_EOL;
        return $stock ?? 0;
    }

    /**
     * 清理库存
     *
     * @param string $name
     * @return bool
     */
    public function clearStock(string $name)
    {
        $purchaseClass = new Purchase();
        $saleClass = new Sale();
        $number = $this->getStock($name);
        $saleClass->offSale($name);
        $purchaseClass->refuseBuy($name);
        echo '清理' . $name . '库存数量为' . $number . PHP_EOL;
        return true;
    }
}