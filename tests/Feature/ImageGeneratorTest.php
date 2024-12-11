<?php

use App\Facades\Ai;
use App\Services\ImageGenerator;

it('generates an image', function () {
    // Arrange
    Ai::fake();
    $imageGenerator = resolve(ImageGenerator::class);

    // Act
    $image = $imageGenerator->generate('a beautiful sunset');

    // Assert
    expect($image)->toBe('Generated image for: a beautiful sunset');
});
