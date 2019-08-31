<?php

namespace Mazedlx\MigrationsTab\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\BufferedOutput;

class ResetController
{
    public function __invoke()
    {
        $output = new BufferedOutput();

        Artisan::call('migrate:reset', [], $output);

        return $output->fetch();
    }
}
