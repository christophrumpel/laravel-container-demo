<?php

namespace App\Services;

class BlogPostGenerator
{
    public function generate(string $prompt): string
    {
        $aiService = new AiService();

        return $aiService->generateText($prompt);
    }
}
