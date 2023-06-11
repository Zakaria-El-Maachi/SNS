<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CraftsmenController;
use App\Http\Controllers\OngoingController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/craftsmen', [CraftsmenController::class, 'index'])->name('craftsmen.index');
    Route::get('/requests', [OngoingController::class, 'index'])->name('requests.index');
    Route::view('/requests/create', 'requests/create')->name('requests.create');
    Route::get('{craftsman}/reviews', [ReviewsController::class, 'index'])->name('reviews.index');
});


Route::get('/dashboard', function () {
    $user_type = auth()->user()->account_type;
    if ($user_type == 'User') {
        return view('dashboard');
    } elseif ($user_type == 'Craftsman') {
        return view('craftsman/dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
