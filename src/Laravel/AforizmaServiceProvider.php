<?php

namespace Ahurkatolto\Aforizma\Laravel;

use Ahurkatolto\Aforizma\Aforizma;
use Illuminate\Support\ServiceProvider;

class AforizmaServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        // Provide random Aforizma dependency injection
        $this->app->bind(Aforizma::class, function () {
            return Aforizma::random();
        });
    }

    public function boot(): void
    {
        // Register the Aforizma artisan command
        $this->commands(AforizmaCommand::class);
    }

}
