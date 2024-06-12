<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\QuestaoController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/testes', [TesteController::class, 'index'])->name('testes.index');
    Route::get('/testes/create', [TesteController::class, 'create'])->name('testes.create');
    Route::post('/testes', [TesteController::class, 'store'])->name('testes.store');
    Route::get('/testes/{teste}', [TesteController::class, 'show'])->name('testes.show');
    Route::get('/testes/{teste}/edit', [TesteController::class, 'edit'])->name('testes.edit');
    Route::put('/testes/{teste}', [TesteController::class, 'update'])->name('testes.update');
    Route::delete('/testes/{teste}', [TesteController::class, 'destroy'])->name('testes.destroy');

    Route::get('/testes/{teste}/questoes', [QuestaoController::class, 'index'])->name('questoes.index');
    Route::get('/testes/{teste}/questoes/create', [QuestaoController::class, 'create'])->name('questoes.create');
    Route::post('/testes/{teste}/questoes', [QuestaoController::class, 'store'])->name('questoes.store');
    Route::get('/testes/{teste}/questoes/{questao}', [QuestaoController::class, 'show'])->name('questoes.show');
    Route::get('/testes/{teste}/questoes/{questao}/edit', [QuestaoController::class, 'edit'])->name('questoes.edit');
    Route::put('/testes/{teste}/questoes/{questao}', [QuestaoController::class, 'update'])->name('questoes.update');
    Route::delete('/testes/{teste}/questoes/{questao}', [QuestaoController::class, 'destroy'])->name('questoes.destroy');
});

require __DIR__.'/auth.php';
