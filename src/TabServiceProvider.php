<?php

namespace Mazedlx\MigrationsTab;

use Facade\Ignition\Ignition;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TabServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {
            $this->routes();
        });

        $this->publishes([
            __DIR__ . '/../config/ignition-migrations.php' => config_path('ignition-migrations.php'),
        ]);

        Ignition::tab(app(MigrationsTab::class));
    }

    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        if (!config('app.debug')) {
            return;
        }

        Route::prefix('ignition-vendor/mazedlx/ignition-migrations')
                ->group(__DIR__ . '/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
