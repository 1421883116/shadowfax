<?php

namespace HuangYi\Shadowfax\Events;

class BeforeReloadEvent
{
    /**
     * The Swoole server instance.
     *
     * @var \Swoole\Server
     */
    public $server;

    /**
     * Create a new BeforeReloadEvent instance.
     *
     * @param  \Swoole\Server  $server
     * @return void
     */
    public function __construct($server)
    {
        $this->server = $server;
    }
}
