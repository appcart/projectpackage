<?php

namespace Surajshindeappcart\Project;

Use Illuminate\Support\ServiceProvider;

class ProjectServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {

    }
}

?>