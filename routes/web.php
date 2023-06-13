<?php

use App\Http\Controllers\CraftRequestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CraftsmenController;
use App\Http\Controllers\OngoingController;
use App\Http\Controllers\ReviewsController;
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
    Route::get('{craftsman}/requests/create', [OngoingController::class, 'create'])->name('requests.create');
    Route::post('/requests', [OngoingController::class, 'store'])->name('requests.store');
    Route::get('{craftsman}/reviews', [ReviewsController::class, 'index'])->name('reviews.index');
    Route::get('{request}/reviews/create', [ReviewsController::class, 'create'])->name('reviews.create');
    Route::post('/reviews', [ReviewsController::class, 'store'])->name('reviews.store');

    Route::get('/craftsman/requests/index', [CraftRequestController::class, 'index'])->name('craftsman.requests.index');
    Route::patch('/craftsman/request', [CraftRequestController::class, 'update'])->name('craftsman.request.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/craftsman/requests', [CraftRequestController::class, 'index'])->name('craftsman/requests.index');
    Route::get('craftsman/reviews.index', [CraftReviewsController::class, 'index'])->name('craftsman/reviews.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
