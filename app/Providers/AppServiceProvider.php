<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('time_format', function ($attribute, $value, $parameters, $validator) {
            // Define the regex pattern for the desired time format (HH:mm)
            $pattern = '/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$/';

            // Perform the validation using preg_match
            return preg_match($pattern, $value);
        });
    }
}
