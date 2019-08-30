<?php

namespace Mazedlx\MigrationsTab;

use Facade\Ignition\Tabs\Tab as BaseTab;

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
        return [
            'title' => $this->name(),
        ];
    }
}
