<?php

namespace Csoseman\MyTestPackage\Tests;

use Csoseman\MyTestPackage\Facades\MyTestPackage;
use Csoseman\MyTestPackage\ServiceProvider;
use Orchestra\Testbench\TestCase;

class MyTestPackageTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'my-test-package' => MyTestPackage::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
