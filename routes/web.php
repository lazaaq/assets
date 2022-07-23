<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes([
    'register' => false,
    'reset'    => false,
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/kandidat', [App\Http\Controllers\KandidatController::class, 'index'])->name('home.kandidat');

Route::get('/home/voter', [App\Http\Controllers\VoterController::class, 'index'])->name('home.voter');

Route::post('/home/voter/tambah', [App\Http\Controllers\VoterController::class, 'tambah'])->name('voter.tambah');

Route::post('/home/voter/{email}', [App\Http\Controllers\VoterController::class, 'token'])->name('voter.token');

Route::post('/token', [App\Http\Controllers\VotingController::class, 'sync'])->name('token.sync');

Route::post('/vote/{token}', [App\Http\Controllers\VotingController::class, 'submit'])->name('token.submit');

Route::post('/home/kandidat/tambah', [App\Http\Controllers\KandidatController::class, 'tambah'])->name('kandidat.tambah');

Route::get('/vote', [App\Http\Controllers\VotingController::class, 'index'])->name('vote.index');

Route::get('/home/pengaturan', [App\Http\Controllers\PengaturanController::class, 'index'])->name('home.pengaturan');

Route::post('/home/pengaturan/tambah', [App\Http\Controllers\PengaturanController::class, 'tambah'])->name('pengaturan.tambah');




