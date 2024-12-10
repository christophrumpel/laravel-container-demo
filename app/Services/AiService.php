<?php

namespace App\Services;

use GuzzleHttp\Client;

class AiService
{

    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
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
