<?php
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservaController;
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

//Rutas de hoteles
Route::middleware('auth')->group(function () {
    Route::get('/hoteles', [HotelController::class, 'index'])->name('hoteles.index');
    Route::get('/hoteles/create', [HotelController::class, 'create'])->name('hoteles.create');
    Route::post('/hoteles', [HotelController::class, 'store'])->name('hoteles.store');
    Route::get('/hoteles/{hotel}/edit', [HotelController::class, 'edit'])->name('hoteles.edit');
    Route::put('/hoteles/{hotel}', [HotelController::class, 'update'])->name('hoteles.update');
    Route::delete('/hoteles/{hotel}', [HotelController::class, 'destroy'])->name('hoteles.destroy');
    });
    
    
        
    

require __DIR__.'/auth.php';
