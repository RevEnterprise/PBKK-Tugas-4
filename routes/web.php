<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/beranda', [PageController::class, 'home'])
    ->name('beranda');

Route::get('/profil-mahasiswa/{nrp?}', [PageController::class, 'profile'])
    ->where('nrp', '[0-9]{10}')
    ->name('profile');

Route::get('/ide-agent', [PageController::class, 'agent'])
    ->name('agent');

Route::post('/ide-agent', [PageController::class, 'submitIdea'])
    ->name('agent.submit');

Route::get('/hitung-ipk/{ip1}/{ip2}', [PageController::class, 'ipk'])
    ->name('hitung.ipk');


Route::get('/mahasiswa/{nrp}', function ($nrp) {
    return redirect()->route('profile');
})->where('nrp', '[0-9]{10}')
  ->name('mahasiswa');

Route::get('/agent/{tema?}', function ($tema = null) {
    return redirect()->route('agent', [
        'tema' => $tema
    ]);
})->name('legacy.agent');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});