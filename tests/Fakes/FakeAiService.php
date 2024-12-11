<?php

namespace Tests\Fakes;

use App\Services\AiServiceInterface;

class FakeAiService implements AiServiceInterface
{
    public function generateText(string $prompt): string
    {
        return "Generated text for: $prompt";
    }

    public function generateImage(string $prompt): string
    {
        return "Generated image for: $prompt";
    }
}
