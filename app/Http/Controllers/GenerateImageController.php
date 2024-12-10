<?php

namespace App\Http\Controllers;

class GenerateImageController extends Controller
{

    public function __invoke()
    {
        $image = 'image?';

        return view('generate', ['image' => $image]);
    }
}
