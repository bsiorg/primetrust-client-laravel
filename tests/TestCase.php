<?php

namespace BsiOrg\PrimeTrust\Tests;

use BsiOrg\PrimeTrust\PrimeTrustServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PrimeTrustServiceProvider::class,
        ];
    }
}
