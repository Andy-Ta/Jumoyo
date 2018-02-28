<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class ValidationServiceProvider extends ServiceProvider {


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // We don't have to register anything here so we keep this empty!
    }

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        // Need to override the default validator with our own validator
        // We can do that by using the resolver function
        Validator::resolver(function($translator, $data, $rules, $messages, $attributes)
        {
            return new CustomValidator($translator, $data, $rules, $messages, $attributes);
        });
    }

}