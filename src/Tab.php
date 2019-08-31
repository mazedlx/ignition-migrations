<?php

namespace Mazedlx\MigrationsTab;

use Facade\Ignition\Tabs\Tab as BaseTab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\BufferedOutput;

class Tab extends BaseTab
{
    public function name(): string
    {
        return 'Migrations';
    }

    public function component(): string
    {
        return 'ignition-migrations';
    }

    public function registerAssets()
    {
        $this->script('ignition-migrations', __DIR__.'/../dist/js/tab.js');
    }

    public function meta(): array
    {
        $output = new BufferedOutput;

        Artisan::call('migrate:status', [], $output);

        return [
            'title' => $this->name(),
            'migrationStatus' => $output->fetch(),
        ];
    }
}
