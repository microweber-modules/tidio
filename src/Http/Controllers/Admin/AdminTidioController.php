<?php

namespace MicroweberPackages\Modules\Tidio\Http\Controllers\Admin;

use MicroweberPackages\Admin\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class AdminTidioController extends AdminController
{
    public function index(Request $request)
    {
        return view('microweber-module-tidio::admin.index');
    }
}
