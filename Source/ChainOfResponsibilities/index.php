<?php
namespace DesignPatterns\ChainOfResponsibilities;

require __DIR__ . '/../../vendor/autoload.php';

class Client
{
    /** @var array $middlewareConfig 中间件配置 */
    protected $middlewareConfig = [
        CheckSign::class,
        CheckToken::class,
        CheckPermission::class,
    ];

    public function run()
    {
        new Middleware($this->middlewareConfig);
    }
}

$client = new Client();
$client->run();