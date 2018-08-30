<?php

namespace Csoseman\MyTestPackage\Facades;

use Illuminate\Support\Facades\Facade;

class MyTestPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'my-test-package';
    }
}
