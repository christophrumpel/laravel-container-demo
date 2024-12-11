<?php

namespace App\Services;

use App\Facades\Ai;

class ImageGenerator
{
    public function generate(string $prompt): string
    {
        return Ai::generateImage($prompt);
    }
}
