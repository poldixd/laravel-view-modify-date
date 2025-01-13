<?php

namespace poldixd\ViewModifyDate\Tests;

use Illuminate\Support\Facades\View;
use Orchestra\Testbench\TestCase as BaseTestCase;
use poldixd\ViewModifyDate\ViewModifyDateServiceProvider;

class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        View::addLocation(__DIR__.'/resources/views');
    }

    protected function getPackageProviders($app): array
    {
        return [
            ViewModifyDateServiceProvider::class,
        ];
    }
}
