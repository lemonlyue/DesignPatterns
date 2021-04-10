<?php
namespace DesignPatterns\Observer;

require __DIR__ . '/../vendor/autoload.php';

class Client
{
    /**
     * 观察者Config
     * @var array $observsers
     */
    public $observsers = [
        SMSObserver::class,
        IntegralObserver::class
    ];

    public function run()
    {
        $subject = new Subject();

        foreach ($this->observsers as $class) {
            $subject->attach(new $class());
        }
        $subject->publish();
    }
}

$client = new Client();
$client->run();