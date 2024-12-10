<?php

namespace App\Services;

use GuzzleHttp\Client;

class ImageGenerator
{
    public function generate(string $prompt): string
    {
        $aiService = new AiService(new Client());

        return $aiService->generateImage($prompt);
    }
}
