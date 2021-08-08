<?php


namespace DesignPatterns\Mediator;

/**
 * 库存
 *
 * Class Stock
 * @package DesignPatterns\Mediator
 */
class Stock extends AbstractColleague
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
        echo $name . '当前库存为' . $this->productStock[$name] . PHP_EOL;
        return $this->productStock[$name];
    }

    /**
     * 清理库存
     *
     * @param string $name
     * @return bool
     */
    public function clearStock(string $name)
    {
        $number = $this->getStock($name);
        $this->mediator->execute('sale', 'offSale', $name);
        $this->mediator->execute('purchase', 'refuseBuy', $name);
        echo '清理' . $name . '库存数量为' . $number . PHP_EOL;
        return true;
    }
}