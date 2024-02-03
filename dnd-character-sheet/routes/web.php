<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('characters')
        ->group(function () {
            Route::get('/', [CharacterController::class, 'index'])->name('characters.index');
            // Route::get('/create', [CharacterController::class, 'create'])->name('characters.create');
            // Route::post('/', [CharacterController::class, 'store'])->name('characters.store');
            // Route::get('/{character}', [CharacterController::class, 'show'])->name('characters.show');
            // Route::get('/{character}/edit', [CharacterController::class, 'edit'])->name('characters.edit');
            // Route::put('/{character}', [CharacterController::class, 'update'])->name('characters.update');
            // Route::delete('/{character}', [CharacterController::class, 'destroy'])->name('characters.destroy');
        });
});



require __DIR__.'/auth.php';
