<?php

namespace App\Services;

class AiService
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
