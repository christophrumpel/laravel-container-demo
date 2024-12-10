<?php

namespace App\Http\Controllers;

use App\Services\ImageGenerator;

class GenerateImageController extends Controller
{

    public function __construct(private ImageGenerator $imageGenerator)
    {
    }

    public function __invoke()
    {
        $image = $this->imageGenerator->generate('A beautiful dog!');

        return view('generate', ['image' => $image]);
    }
}
