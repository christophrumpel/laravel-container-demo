<?php

namespace App\Http\Controllers;

use App\Services\AiService;
use App\Services\ImageGenerator;
use GuzzleHttp\Client;

class GenerateImageController extends Controller
{

    public function __invoke()
    {
        $imageGenerator = new ImageGenerator(new AiService(new Client()));
        $image = $imageGenerator->generate('A beautiful sunset!');

        return view('generate', ['image' => $image]);
    }
}
