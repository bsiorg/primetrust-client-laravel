<?php

namespace BsiOrg\PrimeTrust;

use Illuminate\Support\Facades\Facade;

class PrimeTrust extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'primetrust';
    }
}
