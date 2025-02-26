<?php

namespace Ewwe\FilamentSpatieMediaLibraryCroppie;


use Spatie\LaravelPackageTools\Package;

use Illuminate\Support\ServiceProvider;

class FilamentSpatieMediaLibraryCroppieServiceProvider extends ServiceProvider
{
    public static string $name = 'filament-spatie-media-library-croppie';

    protected array $styles = [
        'filament-spatie-media-library-croppie-style' =>
            __DIR__ . '/../resources/dist/css/filament-spatie-media-library-croppie.css',
    ];

    protected array $beforeCoreScripts = [
        'filament-spatie-media-library-croppie-component-script' =>
            __DIR__ . '/../resources/dist/js/filament-spatie-media-library-croppie.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasAssets()
            ->hasViews('filament-spatie-media-library-croppie')
            ->hasTranslations();
    }
}
