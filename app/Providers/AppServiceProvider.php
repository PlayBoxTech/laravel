<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use App\Services\MailchimpNewsletter;
//use App\Services\ConvertkitNewsletter;
use App\Services\Newsletter;
use MailchimpMarketing\ApiClient;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind(Newsletter::class, function () {
            $client = (new ApiClient)->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us6'
            ]);

            return new MailchimpNewsletter($client);
        });
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Paginator::useBootstrap();
        Model::unguard();
    }
}
