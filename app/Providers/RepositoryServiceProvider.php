<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $repositories = [
          'Movie',
        ];
        foreach($repositories as $repo) {
            $this->app->bind(
                'App\\Repositories\\' . $repo . '\\' . $repo . 'RepositoryInterface',
                'App\\Repositories\\' . $repo . '\\' . $repo . 'Repository'
            );
        }
    }
}


?>
