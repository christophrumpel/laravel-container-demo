<?php

namespace App\Services;

use GuzzleHttp\Client;

class BlogPostGenerator
{
    public function generate(string $prompt): string
    {
        $aiService = new AiService(new Client());

        return $aiService->generateText($prompt);
    }
}
