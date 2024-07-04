<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->environment() === 'production') {
            URL::forceScheme('https');
        }

        if($this->app->environment() !== 'production') {
            DB::listen(function ($query) {
                Log::info(
                    wordwrap(vsprintf(str_replace('?', '%s', $query->sql), $query->bindings), 150, "\n", false)
                );
                Log::info($query->bindings);
            });
        }
        Paginator::defaultView('admin.pagination.default');

        // Paginator::defaultSimpleView('admin.pagination.bootstrap-4');
    }
}
