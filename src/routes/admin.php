<?php

Route::name('admin.tidio.')
    ->prefix(ADMIN_PREFIX . '/tidio')
    ->middleware(['admin'])
    ->namespace('MicroweberPackages\Modules\Tidio\Http\Controllers\Admin')
    ->group(function () {

        Route::get('/', 'AdminTidioController@index')->name('index');

    });
