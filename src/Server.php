<?php

namespace Webman\Channel;

class Server extends \Channel\Server
{
    public function __construct()
    {
    }

    public function onWorkerStart($worker)
    {
        $this->_worker = $worker;
        $worker->channels = [];
    }
}