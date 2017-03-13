<?php

namespace Josvar\SeoTags;

use Illuminate\Support\ServiceProvider;

class SeoTagsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/seotags.php' => config_path('seotags'),
        ], 'config');

        if (! class_exists('CreateSeoTagsTable')) {
            $timestamp = date('Y_m_d_His', time());
            $this->publishes([
                __DIR__.'/../database/migrations/create_seotags_table.php.stub' => database_path('migrations/'.$timestamp.'_create_seotags_table.php')
            ]);
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/seotags.php', 'seotags');
    }

}
