<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Http;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected $seed = true;

    protected function setUp(): void
    {
        parent::setUp();

        Http::preventStrayRequests();
    }
}
