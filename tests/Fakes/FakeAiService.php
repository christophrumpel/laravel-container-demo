<?php

namespace Tests\Fakes;

use App\Services\AiServiceInterface;
use App\Services\ImageGenerator;

class FakeAiService implements AiServiceInterface
{
    public static function fake(): void
    {
        app()->when(ImageGenerator::class)
            ->needs(AiServiceInterface::class)
            ->give(__CLASS__);
    }

    public function generateText(string $prompt): string
    {
        return "Generated text for: $prompt";
    }

    public function generateImage(string $prompt): string
    {
        return "Generated image for: $prompt";
    }
}
