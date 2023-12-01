<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DefaultLocaleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->setLocale('al');
    }

    public function register()
    {
        //
    }
}
