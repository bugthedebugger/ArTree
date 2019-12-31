<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Projectyear;
use Illuminate\Support\Facades\View;

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
        $years = null;
        try {
            $years = Projectyear::orderBy('year', 'asc')->get();
        } catch (\Exception $e) {
            \Log::error($e);
            $years = null;
        }
        View::share('projectYears', $years);
    }
}
