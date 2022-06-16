<?php

namespace MichaelRubel\SafeFormRequest\Tests;

use MichaelRubel\SafeFormRequest\SafeFormRequestServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            SafeFormRequestServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('testing');
    }
}
