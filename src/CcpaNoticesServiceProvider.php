<?php

namespace JeffersonGoncalves\Filament\CcpaNotices;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class CcpaNoticesServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-ccpa-notices';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
