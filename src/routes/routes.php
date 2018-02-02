<?php

Route::group(['prefix' => 'angka-harapan-hidup'], function() {
    Route::get('demo', 'Bantenprov\AngkaHarapanHidup\Http\Controllers\AngkaHarapanHidupController@demo');
});
