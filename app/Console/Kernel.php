<?php

namespace Containment\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * @var array
     */
    protected $commands = [

    ];

    /**
     * @inheritdoc
     *
     * @param Schedule $schedule
     */
    protected function schedule(Schedule $schedule)
    {

    }

    /**
     * @inheritdoc
     */
    protected function commands()
    {

    }
}
