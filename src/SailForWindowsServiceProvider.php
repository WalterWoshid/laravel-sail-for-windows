<?php

namespace WalterWoshid\SailForWindows;

use Illuminate\Support\ServiceProvider;

/** @noinspection PhpUnused */
class SailForWindowsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @noinspection PhpUnused
     */
    public function boot(): void
    {
        $this->configurePublishing();
    }

    /**
     * Configure publishing for the package.
     */
    protected function configurePublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $composerConfig = json_decode(
                file_get_contents(
                    $this->app->basePath('composer.json'),
                ),
                true,
            );
            $binPath = $composerConfig['config']['bin-dir'] ?? 'vendor/bin';

            // Copy sail.ps1 automatically to the Composer bin directory
            // Why not add it to the bin section of composer.json?
            // Because Composer creates some bash script which will not work on Windows
            $this->publishes([
                __DIR__ . '/../bin/sail.ps1' => $binPath . '/sail.ps1',
            ], ['laravel-assets']);

            $this->publishes([
                __DIR__ . '/../bin/sail.ps1' => $this->app->basePath('sail.ps1'),
            ], ['sail', 'sail-bin']);
        }
    }
}
