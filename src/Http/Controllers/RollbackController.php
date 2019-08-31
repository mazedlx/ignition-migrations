<?php

namespace Mazedlx\MigrationsTab\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\BufferedOutput;

class RollbackController
{
    public function __invoke()
    {
        $output = new BufferedOutput();

        Artisan::call('migrate:rollback', [], $output);
        Artisan::call('migrate:status', [], $output);

        return $output->fetch();
    }
}
