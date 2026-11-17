<?php

namespace JeffersonGoncalves\Filament\CcpaNotices;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaNoticesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-ccpa-notices')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
