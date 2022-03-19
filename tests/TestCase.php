<?php

namespace BsiOrg\PrimeTrust\Tests;

use BsiOrg\PrimeTrust\PrimeTrustServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            PrimeTrustServiceProvider::class,
        ];
    }
}
