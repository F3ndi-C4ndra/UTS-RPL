booking
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;



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


Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::get('/booking/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/{booking}/edit', [BookingController::class, 'edit'])->name('booking.edit');
Route::put('/booking/{booking}/update', [BookingController::class, 'update'])->name('booking.update');
Route::delete('/booking/{id}', [BookingController::class, 'destroy'])->name('booking.destroy');
Route::delete('/booking/delete', [BookingController::class, 'delete']);
Route::put('/booking/update', [BookingController::class, 'update']);
Route::put('/booking/edit', [BookingController::class, 'edit']); 
Route::get('/booking/create', [BookingController::class, 'create']); 
Route::post('/booking/create', [BookingController::class, 'store']); 
Route::middleware(['auth'])->group(function () {

});







