<?php

namespace App\Http\Controllers;

use App\Services\BlogPostGenerator;

class GenerateBlogPostController extends Controller
{

    public function __construct(private BlogPostGenerator $blogPostGenerator)
    {
    }

    public function __invoke()
    {
        $post = $this->blogPostGenerator->generate('Laravel Introduction');

        return view('generate', ['post' => $post]);
    }
}
