<?php

namespace Mazedlx\MigrationsTab\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Mazedlx\MigrationsTab\TabServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            TabServiceProvider::class,
        ];
    }
}
