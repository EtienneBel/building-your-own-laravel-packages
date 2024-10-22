<?php

namespace YourVendorName\YourPackageName;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class YourVendorNameServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register the component
        Livewire::component('button-component', \YourVendorName\YourPackageName\Components\ButtonComponent::class);

        // Publish views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/yourpackagename'),
        ], 'views');
    }

    public function register()
    {
        //
    }
}
