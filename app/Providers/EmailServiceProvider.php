<?php

namespace App\Providers;

use App\src\Mailer;
use App\src\MailerInterface;
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
        $this->app->bind(MailerInterface::class, Mailer::class);
    }
}
