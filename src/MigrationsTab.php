<?php

namespace Mazedlx\MigrationsTab;

use Facade\Ignition\Tabs\Tab;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\BufferedOutput;

class MigrationsTab extends Tab
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
        $this->script('ignition-migrations', __DIR__ . '/../dist/js/tab.js');
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
