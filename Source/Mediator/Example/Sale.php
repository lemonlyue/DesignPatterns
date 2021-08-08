<?php


namespace DesignPatterns\Mediator\Example;

/**
 * 销售
 *
 * Class Sale
 * @package DesignPatterns\Mediator
 */
class Sale
{
    /**
     * 获取每日销量
     *
     * @param string $name
     * @return int
     * @throws \Exception
     */
    public function getSales(string $name)
    {
        $sales = random_int(1, 100);
        echo $name . '销量为' . $sales . PHP_EOL;
        return $sales;
    }

    /**
     * 销售
     *
     * @param string $name
     * @param int $number
     * @return bool
     * @throws \Exception
     */
    public function sell(string $name, int $number)
    {
        $stockClass = new Stock();
        $purchaseClass = new Purchase();
        $stockClass->decrease($name, $number);
        $stock = $stockClass->getStock($name);
        // 库存少于等于当前销售量时, 通知采购部门采购
        if ($stock <= $number) {
            $purchaseClass->buy($name, $number, true);
        }
        echo '销售' . $name . $number . '件' . PHP_EOL;
        return true;
    }

    /**
     * 打折销售
     *
     * @param string $name
     * @return bool
     */
    public function offSale(string $name)
    {
        $stockClass = new Stock();
        $stock = $stockClass->getStock($name);
        echo '打折销售' . $name . $stock . '件'. PHP_EOL;
        $stockClass->decrease($name, $stock);
        return true;
    }
}