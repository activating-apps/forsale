<?php

// app/Providers/DomainServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GetDomain;

class DomainServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Services\GetDomain', function () {
            return new GetDomain();
        });

        $this->app->singleton('domain', function ($app) {
            return $app->make('App\Services\GetDomain')->return();
        });

        config(['app.domain' => $this->app->make('domain')]);
    }
}
