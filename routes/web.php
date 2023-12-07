<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
Route::middleware('auth')->group(function () {
Route::get('/dashboard', [\App\Http\Controllers\Data_Controller::class, 'index'])->name('dashboard');
Route::get('/all-users', [\App\Http\Controllers\Data_Controller::class, 'all'])->name('all');
Route::get('/user/delete/{id}', [\App\Http\Controllers\Data_Controller::class, 'destroy'])->name('user.delet');
Route::get('/showfamile/{id}', [\App\Http\Controllers\Data_Controller::class, 'show'])->name('show.famile');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    Route::get('/', function(){return view('index');});
    Route::get('/family_head', [App\Http\Controllers\Family_Leader_Controller::class, 'index'])->name('index');
    Route::post('/store', [App\Http\Controllers\Family_Leader_Controller::class, 'store'])->name('famile.store');
    Route::post('/members', [App\Http\Controllers\Family_Members_Controller::class, 'store'])->name('members.store');
    Route::get('/end', function () {return view('thanks');})->name('thanks');

require __DIR__.'/auth.php';
