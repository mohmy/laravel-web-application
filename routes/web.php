<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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
    return view('welcome');
})->middleware('guest');

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->prefix('tetapan-akaun')->group(function () {
    Route::get('/', function () {
        return view('account.setting');
    })->name('account.setting');
    Route::get('butiran-peribadi', [AccountController::class, 'index'])->name('account.personal');
});


Route::get('/{user}', function (User $user) {
    return view('account.profile', compact('user'));
})->name('profile');
