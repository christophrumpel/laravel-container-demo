<?php

namespace App\Services;

use GuzzleHttp\Client;

class OpenAiService implements AiServiceInterface
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
