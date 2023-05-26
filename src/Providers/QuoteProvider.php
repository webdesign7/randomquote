<?php

namespace Webdesign7\Randomquote\Providers;

use Illuminate\Support\ServiceProvider;

class QuoteProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'randomquote');
    }
}
