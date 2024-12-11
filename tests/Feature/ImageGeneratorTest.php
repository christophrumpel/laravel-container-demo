<?php

use App\Services\AiServiceInterface;
use App\Services\ImageGenerator;
use Tests\Fakes\FakeAiService;

it('generates an image', function () {
    // Arrange
    app()->when(ImageGenerator::class)
        ->needs(AiServiceInterface::class)
        ->give(FakeAiService::class);
    $imageGenerator = resolve(ImageGenerator::class);

    // Act
    $image = $imageGenerator->generate('a beautiful sunset');

    // Assert
    expect($image)->toBe('Generated image for: a beautiful sunset');
});
