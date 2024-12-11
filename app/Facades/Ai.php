<?php

namespace App\Facades;

use App\Services\AiServiceInterface;
use Illuminate\Support\Facades\Facade;
use Tests\Fakes\FakeAiService;

class Ai extends Facade
{

    public static function fake(): void
    {
        self::swap(new FakeAiService());
    }

    protected static function getFacadeAccessor(): string
    {
        return AiServiceInterface::class;
    }
}
