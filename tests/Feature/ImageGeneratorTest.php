<?php

use App\Services\ImageGenerator;
use Tests\Fakes\FakeAiService;

it('generates an image', function () {
    // Arrange
    FakeAiService::fake();
    $imageGenerator = resolve(ImageGenerator::class);

    // Act
    $image = $imageGenerator->generate('a beautiful sunset');

    // Assert
    expect($image)->toBe('Generated image for: a beautiful sunset');
});
