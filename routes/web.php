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
    
    
    //Rutas de habitaciones
    Route::middleware('auth')->group(function () {
        Route::get('/habitaciones', [HabitacionController::class, 'index'])->name('habitaciones.index');
        Route::get('/habitaciones/create', [HabitacionController::class, 'create'])->name('habitaciones.create');
        Route::post('/habitaciones', [HabitacionController::class, 'store'])->name('habitaciones.store');
        Route::get('/habitaciones/{habitacion}/edit', [HabitacionController::class, 'edit'])->name('habitaciones.edit');
        Route::put('/habitaciones/{habitacion}', [HabitacionController::class, 'update'])->name('habitaciones.update');
        Route::delete('/habitaciones/{habitacion}', [HabitacionController::class, 'destroy'])->name('habitaciones.destroy');
        });
    
        
    //Rutas de reservas
    Route::middleware('auth')->group(function () {
        Route::get('/reservas', [ReservaController::class, 'index'])->name('reservas.index');
        Route::get('/reservas/create', [ReservaController::class, 'create'])->name('reservas.create');
        Route::post('/reservas', [ReservaController::class, 'store'])->name('reservas.store');
        Route::get('/reservas/{reserva}/edit', [ReservaController::class, 'edit'])->name('reservas.edit');
        Route::put('/reservas/{reserva}', [ReservaController::class, 'update'])->name('reservas.update');
        Route::delete('/reservas/{reserva}', [ReservaController::class, 'destroy'])->name('reservas.destroy');
        });
    
    

require __DIR__.'/auth.php';
