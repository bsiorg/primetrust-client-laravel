<?php

namespace BsiOrg\PrimeTrust;

use Illuminate\Support\Facades\Facade;

class PrimeTrustFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'primetrust';
    }
}
