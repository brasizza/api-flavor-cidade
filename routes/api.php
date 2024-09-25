<?php

use App\Http\Controllers\DadosCidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Group routes with a wildcard prefix
Route::prefix('{prefix}')->group(function () {

    // Example route that uses the wildcard
    Route::get('/', [DadosCidade::class, 'index' ]);

});
