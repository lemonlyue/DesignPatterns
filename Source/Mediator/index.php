<?php

namespace DesignPatterns\Mediator;

require __DIR__ . '/../../vendor/autoload.php';

class Client
{
    public function run()
    {
        $mediator = new ConcreteMediator();

        $purchase = new Purchase();

        $stock = new Stock();

        $sale = new Sale();

        $mediator->setColleague($purchase, 'purchase');
        $mediator->setColleague($stock, 'stock');
        $mediator->setColleague($sale, 'sale');

        $purchase->setMediator($mediator);
        $stock->setMediator($mediator);
        $sale->setMediator($mediator);

        $product = '农夫山泉';

        echo '---采购部门采购---' . PHP_EOL;
        $purchase->buy($product, 100);
        echo $product . '当前库存为' . $stock->getStock('农夫山泉');

        echo '---销售部门销售---' . PHP_EOL;
        $sale->sell($product, 100);

        echo '---仓库部门清理库存---' . PHP_EOL;
        $stock->clearStock($product);
    }
}

$client = new Client();
$client->run();