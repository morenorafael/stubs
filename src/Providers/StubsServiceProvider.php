<?php

namespace Morenorafael\Stubs\Providers;

use Illuminate\Support\ServiceProvider;
use Morenorafael\Stubs\Console\Commands\GenerateConfigServiceCommand;
use Morenorafael\Stubs\Console\Commands\GenerateDriverServiceCommand;
use Morenorafael\Stubs\Console\Commands\GenerateFacadeServiceCommand;
use Morenorafael\Stubs\Console\Commands\GenerateInterfaceServiceCommand;
use Morenorafael\Stubs\Console\Commands\GenerateManagerServiceCommand;
use Morenorafael\Stubs\Console\Commands\GenerateRepositoryServiceCommand;
use Morenorafael\Stubs\Console\Commands\GenerateServiceCommand;
use Morenorafael\Stubs\Console\Commands\GenerateServiceProviderServiceCommand;

class StubsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateConfigServiceCommand::class,
                GenerateDriverServiceCommand::class,
                GenerateFacadeServiceCommand::class,
                GenerateInterfaceServiceCommand::class,
                GenerateManagerServiceCommand::class,
                GenerateRepositoryServiceCommand::class,
                GenerateServiceCommand::class,
                GenerateServiceProviderServiceCommand::class,
            ]);
        }
    }
}
