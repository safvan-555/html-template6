<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\ServiceItem;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         View::composer('*', function ($view) {
        $moreServices = ServiceItem::orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        $view->with('moreServices', $moreServices);
    });
    }
}
