<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;

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
    return redirect('/dashboard');
});

Route::get('/dashboard', [clientController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
