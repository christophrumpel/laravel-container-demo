<?php

use App\Services\ImageGenerator;
use App\Services\OpenAiService;
use GuzzleHttp\Client;

it('generates an image', function () {
    // Arrange
    $imageGenerator = new ImageGenerator(new OpenAiService(new Client(), ['credentials']));

    // Act
    $image = $imageGenerator->generate('a beautiful sunset');

    // Assert
    expect($image)->toBe('Generated image for: a beautiful sunset');
});
