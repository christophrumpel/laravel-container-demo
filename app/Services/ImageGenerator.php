<?php

namespace App\Services;

class ImageGenerator
{
    public function __construct(private AiServiceInterface $aiService)
    {
    }

    public function generate(string $prompt): string
    {
        dd($this->aiService);
        return $this->aiService->generateImage($prompt);
    }
}
