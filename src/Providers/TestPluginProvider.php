<?php

namespace LibreNMS\TestPlugin\Providers;

use App\Plugins\Hooks\MenuEntryHook;
use App\Plugins\PluginManager;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use LibreNMS\TestPlugin\Commands\SayHelloCommand;
use LibreNMS\TestPlugin\Hooks\MenuHook;

class TestPluginProvider extends ServiceProvider
{
    public function boot(PluginManager $manager)
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'test-plugin');
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'test-plugin');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

        $name = 'test-plugin';
        $manager->publishHook($name,MenuEntryHook::class, MenuHook::class);

        if ($this->app->runningInConsole()) {
            $this->commands([
                SayHelloCommand::class
            ]);

            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/test-plugin'),
            ], 'lang');

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/test-plugin'),
            ], 'views');
        }
    }
}
