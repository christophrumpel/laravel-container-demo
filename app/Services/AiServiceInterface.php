<?php

namespace App\Services;

interface AiServiceInterface
{
    public function generateText(string $prompt): string;

    public function generateImage(string $prompt): string;
}
