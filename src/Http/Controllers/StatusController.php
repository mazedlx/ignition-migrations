<?php

namespace Mazedlx\MigrationsTab\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\BufferedOutput;

class StatusController
{
    public function __invoke()
    {
        $output = new BufferedOutput();

        Artisan::call('migrate:status', [], $output);

        return $output->fetch();
    }
}
