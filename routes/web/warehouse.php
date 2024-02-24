<?php
Route::namespace('App\Http\Controllers\Warehouse')->group(function () {
    Route::name('warehouse.')->group(function () {
        Route::name('gudang.')->group(function () {
            Route::prefix('gudang')->group(function () {
                Route::get('/', "GudangController@index")->name('index');
                Route::get('/tambah', "GudangController@add")->name('add');
                Route::post('/store', "GudangController@store")->name('tambah');
                Route::get('/edit/{id}', "GudangController@edit")->name('edit');
                Route::put('/update/{id}', "GudangController@update")->name('update');
                Route::get('/detail/{id}', "GudangController@detail")->name('detail');
                Route::delete('/delete/{id}', "GudangController@delete")->name('delete');
            });
        });

        route::name('barang.')->group(function () {
            Route::prefix('barang')->group(function () {
                Route::get('/', "BarangController@index")->name('index');
                Route::get('/tambah', "BarangController@add")->name('add');
                Route::post('/store', "BarangController@tambah")->name('tambah');
                Route::get('/edit/{id}', "BarangController@edit")->name('edit');
                Route::put('/update/{id}', "BarangController@update")->name('update');
                Route::get('/detail/{id}', "BarangController@detail")->name('detail');
                Route::delete('/delete/{id}', "BarangController@delete")->name('delete');
            });
        });

        route::name('transfer-gudang.')->group(function () {
            Route::prefix('transfer-gudang')->group(function () {
                Route::get('/', "TransferGudangController@index")->name('index');
                Route::get('/getBarang/{id}', "TransferGudangController@getBarangGudang")->name('getBarangGudang');
                Route::get('/tambah', "TransferGudangController@add")->name('add');
                Route::post('/store', "TransferGudangController@tambah")->name('tambah');
                Route::get('/edit', "TransferGudangController@edit")->name('edit');
                Route::get('/detail', "TransferGudangController@detail")->name('detail');
            });
        });

        route::name('surat-jalan.')->group(function () {
            Route::prefix('surat-jalan')->group(function () {
                Route::get('/', "SuratJalanController@index")->name('index');
                Route::get('/tambah', "SuratJalanController@add")->name('add');
                Route::get('/edit', "SuratJalanController@add")->name('edit');
                Route::get('/detail', "SuratJalanController@add")->name('detail');
                Route::put('/valid-status/{id}', "SuratJalanController@validStatus")->name('validStatus');
                Route::put('/batal-status/{id}', "SuratJalanController@batalStatus")->name('batalStatus');

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
