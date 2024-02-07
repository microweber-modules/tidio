<?php

namespace MicroweberPackages\Modules\Tidio\Providers;

use Illuminate\Support\Facades\View;
use Livewire\Livewire;
use MicroweberPackages\Module\Facades\ModuleAdmin;
use MicroweberPackages\Modules\Tidio\Http\Livewire\Admin\AdminTidioComponent;
use MicroweberPackages\Modules\Tidio\Http\Livewire\TidioSettingsComponent;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class TidioServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('microweber-module-tidio');
        $package->hasViews('microweber-module-tidio');

        $package->hasRoute('admin');
    }


    public function register(): void
    {
        parent::register();

        $this->loadRoutesFrom(__DIR__ . '/../routes/admin.php');

        Livewire::component('microweber-module-tidio::admin-tidio', AdminTidioComponent::class);


    }
}
