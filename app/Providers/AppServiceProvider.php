<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Registrar componentes Flux
        if (file_exists(resource_path('views/flux'))) {
            Blade::anonymousComponentPath(resource_path('views/flux'), 'flux');
        }

        // Também registrar o caminho padrão do Flux
        Blade::anonymousComponentPath(__DIR__.'/../../vendor/livewire/flux/stubs/resources/views/flux', 'flux');
    }
}
