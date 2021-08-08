<?php


namespace DesignPatterns\Mediator;

/**
 * 销售
 *
 * Class Sale
 * @package DesignPatterns\Mediator
 */
class Sale extends AbstractColleague
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
     */
    public function sell(string $name, int $number)
    {
        $this->mediator->execute('stock', 'decrease', $name, $number);
        $stock = $this->mediator->execute('stock', 'getStock', $name);
        // 库存少于等于当前销售量时, 通知采购部门采购
        if ($stock <= $number) {
            $this->mediator->execute('purchase', 'buy', $name, $number, true);
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
        $stock = $this->mediator->execute('stock', 'getStock', $name);
        echo '打折销售' . $name . $stock . '件'. PHP_EOL;
        $this->mediator->execute('stock', 'decrease', $name, $stock);
        return true;
    }
}