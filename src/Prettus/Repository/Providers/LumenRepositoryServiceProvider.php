<?php
namespace Prettus\Repository\Providers;

use Illuminate\Support\ServiceProvider;
use Prettus\Repository\Generators\Commands\BindingsCommand;
use Prettus\Repository\Generators\Commands\ControllerCommand;
use Prettus\Repository\Generators\Commands\CriteriaCommand;
use Prettus\Repository\Generators\Commands\EntityCommand;
use Prettus\Repository\Generators\Commands\PresenterCommand;
use Prettus\Repository\Generators\Commands\RepositoryCommand;
use Prettus\Repository\Generators\Commands\RequestCommand;
use Prettus\Repository\Generators\Commands\TransformerCommand;
use Prettus\Repository\Generators\Commands\ValidatorCommand;
use Prettus\Repository\Generators\Commands\ProviderCommand;

/**
 * Class LumenRepositoryServiceProvider
 * @package Prettus\Repository\Providers
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class LumenRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            RepositoryCommand::class,
            EntityCommand::class,
            ControllerCommand::class,
            BindingsCommand::class,
            CriteriaCommand::class,
            PresenterCommand::class,
            TransformerCommand::class,
            ValidatorCommand::class,
            RequestCommand::class,
            ProviderCommand::class
        );
        $this->app->register('Prettus\Repository\Providers\EventServiceProvider');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
