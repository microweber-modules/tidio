<?php

namespace MicroweberPackages\Modules\Tidio\Http\Livewire\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use MicroweberPackages\Admin\Http\Livewire\AdminComponent;

class AdminTidioComponent extends AdminComponent
{
    use AuthorizesRequests;

    public function render()
    {
        return view('microweber-module-tidio::admin.livewire.index', [

        ]);
    }
}
