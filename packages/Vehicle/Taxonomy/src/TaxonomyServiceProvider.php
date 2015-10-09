<?php

namespace Vehicle\Taxonomy;

use Illuminate\Support\ServiceProvider;

class TaxonomyServiceProvider extends ServiceProvider
{
	public function register()
    {
        $this->app->bind('taxonomy', function($app) {
            return new Taxonomy;
        });
    }

    public function boot()
    {
        // Load the routes file.

        require __DIR__ . '/Http/routes.php';
    }
}

