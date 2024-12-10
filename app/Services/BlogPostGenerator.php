<?php

namespace App\Services;

class BlogPostGenerator
{
    public function __construct(private AiServiceInterface $aiService)
    {
    }

    public function generate(string $prompt): string
    {
        return $this->aiService->generateText($prompt);
    }
}
