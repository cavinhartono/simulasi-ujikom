<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('rupiah', function ($money) {
            return "IDR. <?php echo number_format($money, 0, '',)?>,-";
        });

        Blade::directive('greating', function ($name) {
            date_default_timezone_set('Asia/Jakarta');
            $hour = date("G");

            if ($hour >= 5 && $hour < 9) {
                return "<b>Good morning</b>, $name.";
            } elseif ($hour >= 15 && $hour < 17) {
                return "<b>Good evening</b>, $name.";
            } else {
                return "<b>Good night</b>, $name.";
            }
        });
    }
}
