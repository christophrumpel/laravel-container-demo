<?php

namespace App\Services;

class ImageGenerator
{
    public function generate(string $prompt): string
    {
        $aiService = new AiService();

        return $aiService->generateImage($prompt);
    }
}
