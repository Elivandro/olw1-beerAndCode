<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerController;

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group([
        'prefix' => 'beers'
    ], function (){

    Route::get('/', [BeerController::class, 'index']);
    Route::get('/export', [BeerController::class, 'export']);

});
