<?php

namespace App\Providers;

use App\Services\AiServiceInterface;
use App\Services\BlogPostGenerator;
use App\Services\ClaudeAiService;
use App\Services\ImageGenerator;
use App\Services\OpenAiService;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app
            ->when(ImageGenerator::class)
            ->needs(AiServiceInterface::class)
            ->give(function () {
                return (new OpenAiService(new Client(), [config('services.ai.key')]));
            });

        $this->app
            ->when(BlogPostGenerator::class)
            ->needs(AiServiceInterface::class)
            ->give(function () {
                return (new ClaudeAiService(new Client(), [config('services.ai.key')]));
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
