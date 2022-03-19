<?php

namespace BsiOrg\PrimeTrust\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use BsiOrg\PrimeTrust\PrimeTrustServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PrimeTrustServiceProvider::class,
        ];
    }
}
