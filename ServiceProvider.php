<?php

namespace Ammadeuss\LaravelHtmlDomParser;

use Sunra\PhpSimple\HtmlDomParser;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('HTMLDomParser', function ($app) {
            return new HtmlDomParser;
        });
    }
}
