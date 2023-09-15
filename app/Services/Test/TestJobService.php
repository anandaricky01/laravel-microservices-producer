<?php

namespace App\Services\Test;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class TestJobService {

    private $msg;
    private $channel = 'msg:hello';

    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    public function sendHelloWorld(){
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();
        $channel->exchange_declare('test_exchange', 'direct', false, false, false);
        $channel->queue_declare('test_queue', false, false, false, false);
        $channel->queue_bind('test_queue', 'test_exchange', 'test_key');
        $msg = new AMQPMessage($this->msg);
        $channel->basic_publish($msg, 'test_exchange', 'test_key');
        echo " [x] Sent $this->msg to test_exchange / test_queue.\n";
        $channel->close();
        $connection->close();
    }
}
