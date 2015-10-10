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

        // Defines path for the view files.
        $this->loadViewsFrom(__DIR__ . '/../Views/', 'taxonomy');

        // Defines the files which are going to published.
        $this->publishes([
            __DIR__ .'/Migrations/2015_10_10_000000_create_taxonomy_table.php' => base_path('database/migrations/2015_10_10_000000_create_taxonomy_table.php'),
            __DIR__ .'/Migrations/2015_10_10_000000_create_vocabulary_table.php' => base_path('database/migrations/2015_10_10_000000_create_vocabulary_table.php'),
            __DIR__ .'/Migrations/2015_10_10_000000_create_taxonomy_hierarchy_table.php' => base_path('database/migrations/2015_10_10_000000_create_taxonomy_hierarchy_table.php'),
        ]);

    }
}

