<?php

namespace Mortezamasumi\FbMars;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Gate;
use Livewire\Features\SupportTesting\Testable;
use Mortezamasumi\FbMars\Commands\FbMarsCommand;
use Mortezamasumi\FbMars\Models\FbMars;
use Mortezamasumi\FbMars\Policies\FbMarsPolicy;
use Mortezamasumi\FbMars\Testing\TestsFbMars;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FbMarsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'fb-mars';
    // public static string $viewNamespace = 'fb-mars';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations();
            })
            ->hasConfigFile()
            ->hasMigrations($this->getMigrations())
            ->hasTranslations();
        // ->hasViews(static::$viewNamespace);
    }

    // public function packageRegistered(): void {}

    public function packageBooted(): void
    {
        Gate::policy(FbMars::class, FbMarsPolicy::class);

        // FilamentAsset::register(
        //     $this->getAssets(),
        //     $this->getAssetPackageName()
        // );

        Testable::mixin(new TestsFbMars);
    }

    // protected function getAssetPackageName(): ?string
    // {
    //     return 'mortezamasumi/fb-mars';
    // }

    /** @return array<Asset> */
    // protected function getAssets(): array
    // {
    //     return [
    //         // AlpineComponent::make('fb-mars', __DIR__ . '/../resources/dist/components/fb-mars.js'),
    //         Css::make('fb-mars-styles', __DIR__.'/../resources/dist/fb-mars.css'),
    //         Js::make('fb-mars-scripts', __DIR__.'/../resources/dist/fb-mars.js'),
    //     ];
    // }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_fb_mars_table',
        ];
    }
}
