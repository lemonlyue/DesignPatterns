<?php


namespace DesignPatterns\Mediator;

/**
 * 采购部门
 *
 * Class Purchase
 * @package DesignPatterns\Mediator
 */
class Purchase extends AbstractColleague
{
    /**
     * 采购商品
     *
     * @param string $name
     * @param int $number
     * @param bool $stock
     * @return bool
     */
    public function buy(string $name, int $number, bool $stock = false)
    {
        // 获取商品每日销售量
        $sales = $this->mediator->execute('sale', 'getSales', $name);
        // 每日销量大于等于50则按指定销量采购, 少于50则减半
        if ($sales >= 50 || $stock) {
            $this->mediator->execute('stock', 'increase', $name, $number);
        } else {
            $number /= 2;
            $this->mediator->execute('stock', 'increase', $name, $number);
        }
        echo '采购' . $name . '数量为' . $number . PHP_EOL;
        return true;
    }

    /**
     * 停止采购
     *
     * @param string $name
     * @return bool
     */
    public function refuseBuy(string $name)
    {
        echo '停止采购' . $name . PHP_EOL;
        return true;
    }
}