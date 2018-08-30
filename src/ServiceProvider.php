<?php

namespace Csoseman\MyTestPackage;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/my-test-package.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('my-test-package.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'my-test-package'
        );

        $this->app->bind('my-test-package', function () {
            return new MyTestPackage();
        });
    }
}
