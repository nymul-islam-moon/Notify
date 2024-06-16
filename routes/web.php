<?php

use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProfileController;
use App\Models\Routegroup;
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

/**--------------------------- Admin Route ----------------------------------- */
Route::prefix('faculty')->group( function (){

    Route::controller(FacultyController::class)->group(function () {
        Route::get('/login', 'index')->name('faculty_login');
        Route::post('/login/owner', 'login')->name('faculty.login');
        Route::post('/register/create', 'register_store')->name('faculty.register.create');
        Route::get('/logout', 'logout')->name('faculty.logout');
        Route::get('/register', 'register')->name('faculty.register');
        Route::get('/dashboard', 'dashboard')->name('faculty.dashboard')->middleware('faculty');
    });
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
/**
 * towkir1997islam@gmail.com
 * admin@12345
 */
