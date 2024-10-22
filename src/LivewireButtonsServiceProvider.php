<?php

namespace EtienneBel\LivewireButtons;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use EtienneBel\LivewireButtons\Button;

class LivewireButtonsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'livewire-buttons');

        // Register the component
        Livewire::component('button', Button::class);

        // Publish views
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/livewire-buttons'),
        ], 'livewire-buttons-views');
    }

    public function register()
    {
        //
    }
}