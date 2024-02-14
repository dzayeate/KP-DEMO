<?php
Route::namespace('App\Http\Controllers\Warehouse')->group(function () {
    Route::name('warehouse.')->group(function () {
        Route::name('gudang.')->group(function () {
            Route::prefix('gudang')->group(function () {
                Route::get('/', "GudangController@index")->name('index');
                Route::get('/tambah', "GudangController@add")->name('add');
                Route::get('/edit', "GudangController@edit")->name('edit');
                Route::get('/detail', "GudangController@detail")->name('detail');
            });
        });

        route::name('barang.')->group(function () {
            Route::prefix('barang')->group(function () {
                Route::get('/', "BarangController@index")->name('index');
                Route::get('/tambah', "BarangController@add")->name('add');
                Route::get('/edit', "BarangController@edit")->name('edit');
                Route::get('/detail', "BarangController@detail")->name('detail');
            });
        });

        route::name('transfer-gudang.')->group(function () {
            Route::prefix('transfer-gudang')->group(function () {
                Route::get('/', "TransferGudangController@index")->name('index');
                Route::get('/tambah', "TransferGudangController@add")->name('add');
                Route::get('/edit', "TransferGudangController@edit")->name('edit');
                Route::get('/detail', "TransferGudangController@detail")->name('detail');
            });
        });

        route::name('dashboard.')->group(function () {
            Route::get('/', "DashboardController@index")->name('index');
        });



        /*Route::name('warehouse.')->group(function () {
            Route::get('/', "HomeController@index")->name('index');
        });*/

    });
});
