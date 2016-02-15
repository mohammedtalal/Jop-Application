<?php

namespace App\Providers;

use App\Repositories\Mailer;
use App\Repositories\MailerRepositories;
use Illuminate\Support\ServiceProvider;

class EmailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MailerRepositories::class, Mailer::class);
    }
}
