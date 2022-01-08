<?php

use App\Http\Controllers\vocaController;
use App\Models\Voca;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/main', function () {
    return Inertia::render('voca/Main', ['vocas'=>Voca::all(), 'count'=>Voca::all()->count()]);
})->middleware(['auth', 'verified'])->name('main');

Route::post('/vocas.store', [vocaController::class, 'store']);

Route::get('/seesaved', function () {
    return Inertia::render('voca/See', ['vocas'=>Voca::all(), 'count'=>Voca::all()->count()]);
})->middleware(['auth', 'verified'])->name('see');

Route::get('/vocas.find', [vocaController::class, 'find']);

Route::delete('/vocas.destroy/{id}', [vocaController::class, 'destroy'])->name('vocaDestroy');



require __DIR__.'/auth.php';
