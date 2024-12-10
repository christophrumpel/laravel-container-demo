<?php

namespace App\Services;

use GuzzleHttp\Client;

class ClaudeAiService implements AiServiceInterface
{

    public function __construct(private Client $client, array $credentials)
    {
    }

    public function generateText(string $prompt): string
    {
        // Use client to call AI service
        return "Generated text for: $prompt";
    }

    public function generateImage(string $prompt): string
    {
        // Use client to call AI service
        return "Generated image for: $prompt";
    }
}
