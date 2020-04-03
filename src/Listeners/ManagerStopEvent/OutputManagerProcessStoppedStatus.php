<?php

namespace HuangYi\Shadowfax\Listeners\ManagerStopEvent;

use HuangYi\Shadowfax\Events\ManagerStopEvent;
use HuangYi\Shadowfax\Listeners\HasHelpers;

class OutputManagerProcessStoppedStatus
{
    use HasHelpers;

    /**
     * Handle the event.
     *
     * @param  \HuangYi\Shadowfax\Events\ManagerStopEvent  $event
     * @return void
     */
    public function handle(ManagerStopEvent $event)
    {
        $this->output(
            "<info>[×] manager process stopped. [{$event->server->manager_pid}]</info>"
        );
    }
}
