<?php
namespace DesignPatterns\Proxy;

require __DIR__ . '/../../vendor/autoload.php';

class Client
{
    /**
     * 运行
     */
    public function run()
    {
        $proxy = new Proxy();
        echo '执行操作前' . PHP_EOL;
        $proxy->action();
        echo '执行操作后' . PHP_EOL;
    }
}

$client = new Client();
$client->run();
