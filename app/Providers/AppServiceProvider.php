<?php

namespace App\Providers;

use App\Services\AiServiceInterface;
use App\Services\ClaudeAiService;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AiServiceInterface::class, function () {
            return new ClaudeAiService(new Client(), [config('services.ai.key')]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
