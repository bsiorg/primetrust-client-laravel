<?php

namespace BsiOrg\PrimeTrust\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
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
