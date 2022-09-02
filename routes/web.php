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

Route::post('/home/voter/generateAll', [App\Http\Controllers\VoterController::class, 'generateTokenAll'])->name('generateAll');

Route::post('/home/voter/{email}', [App\Http\Controllers\VoterController::class, 'token'])->name('voter.token');

Route::post('/home/voter/delete/{email}', [App\Http\Controllers\VoterController::class, 'delete'])->name('voter.delete');

Route::post('/token', [App\Http\Controllers\VotingController::class, 'sync'])->name('token.sync');

Route::post('/vote/{token}', [App\Http\Controllers\VotingController::class, 'submit'])->name('token.submit');

Route::post('/home/kandidat/tambah', [App\Http\Controllers\KandidatController::class, 'tambah'])->name('kandidat.tambah');

Route::post('/home/kandidat/delete/{no}', [App\Http\Controllers\KandidatController::class, 'delete'])->name('kandidat.delete');

Route::post('/home/kandidat/update/{no}', [App\Http\Controllers\KandidatController::class, 'update'])->name('kandidat.update');

Route::get('/vote', [App\Http\Controllers\VotingController::class, 'index'])->name('vote.index');

Route::get('/livecount', [App\Http\Controllers\VotingController::class, 'livecount'])->name('vote.livecount');

Route::get('/home/pengaturan', [App\Http\Controllers\PengaturanController::class, 'index'])->name('home.pengaturan');

Route::post('/home/pengaturan/tambah', [App\Http\Controllers\PengaturanController::class, 'tambah'])->name('pengaturan.tambah');

Route::post('/home/pengaturan/delete/{no}', [App\Http\Controllers\PengaturanController::class, 'delete'])->name('pengaturan.delete');

Route::post('/home/pengaturan/deletevoting', [App\Http\Controllers\VotingController::class, 'delete'])->name('delete.voting');

Route::post('/home/pengaturan/update/{no}', [App\Http\Controllers\PengaturanController::class, 'update'])->name('pengaturan.update');

Route::get('/tentang', [App\Http\Controllers\LandingPageController::class, 'tentang'])->name('tentang');

Route::get('/struktur', [App\Http\Controllers\LandingPageController::class, 'struktur'])->name('struktur');




