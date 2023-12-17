<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [ViewController::class, 'home'])->name('home');
Route::get('/buttons', [ViewController::class, 'buttons'])->name('buttons');
Route::get('/cards', [ViewController::class, 'cards'])->name('cards');
Route::get('/colors', [ViewController::class, 'colors'])->name('colors');
Route::get('/borders', [ViewController::class, 'borders'])->name('borders');
Route::get('/animations', [ViewController::class, 'animations'])->name('animations');
Route::get('/other', [ViewController::class, 'other'])->name('other');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/register', [ViewController::class, 'register'])->name('register');
Route::get('/forgot', [ViewController::class, 'forgot'])->name('forgot');
Route::get('/not404', [ViewController::class, 'not404'])->name('not404');
Route::get('/blank', [ViewController::class, 'blank'])->name('blank');
Route::get('/charts', [ViewController::class, 'charts'])->name('charts');
Route::get('/tables', [ViewController::class, 'tables'])->name('tables');




require __DIR__.'/auth.php';
