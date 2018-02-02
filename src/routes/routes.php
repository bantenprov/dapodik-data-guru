<?php

Route::group(['prefix' => 'dd-guru', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\DDGuru\Http\Controllers\DDGuruController@index',
        'create'     => 'Bantenprov\DDGuru\Http\Controllers\DDGuruController@create',
        'store'     => 'Bantenprov\DDGuru\Http\Controllers\DDGuruController@store',
        'show'      => 'Bantenprov\DDGuru\Http\Controllers\DDGuruController@show',
        'update'    => 'Bantenprov\DDGuru\Http\Controllers\DDGuruController@update',
        'destroy'   => 'Bantenprov\DDGuru\Http\Controllers\DDGuruController@destroy',
    ];

    Route::get('/',$controllers->index)->name('dd-guru.index');
    Route::get('/create',$controllers->create)->name('dd-guru.create');
    Route::post('/store',$controllers->store)->name('dd-guru.store');
    Route::get('/{id}',$controllers->show)->name('dd-guru.show');
    Route::put('/{id}/update',$controllers->update)->name('dd-guru.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('dd-guru.destroy');

});

