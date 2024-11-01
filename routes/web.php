<?php

use App\Http\Controllers\ClientePresencialController;
use App\Http\Controllers\ClienteVirtualController;
use App\Http\Controllers\CajeroController;
use App\Http\Controllers\Auth\RedirectController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Middleware\LogUserActivity;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BitacoraController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/butaca', function () {
    return view('butaca.butaca');
});

Route::resource('clientePresencial', ClientePresencialController::class);
Route::resource('clienteVirtual', ClienteVirtualController::class);
Route::resource('cajero', CajeroController::class);
Route::resource('pelicula', PeliculaController::class);
Route::resource('proveedor', ProveedorController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('producto', ProductoController::class);
Route::resource('compra', CompraController::class);




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         $user = Auth::user(); // Obtener el usuario autenticado

//         if ($user->role == 'tra') {
//             return redirect('/cajero');
//         } elseif ($user->role == 'tra') {
//             return redirect('/clienteVirtual');
//         } else {
//             // Redirige a una ruta por defecto o muestra el dashboard
//             return redirect('/');
//         }
//     })->name('dashboard');
// });

/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/

Route::get('/bitacora', [BitacoraController::class, 'index'])->name('bitacora.index')->middleware(['auth']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',LogUserActivity::class,
])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user(); // Obtener el usuario autenticado

        if ($user->role == 'tra') {
            app(ActivityController::class)->logActivity('Acción específica', 'ruta trabajador');
            return redirect('/cajero');
        } elseif ($user->role == 'tra') {
            app(ActivityController::class)->logActivity('Acción específica', 'ruta admin');
            return redirect('/clienteVirtual');
        } else {
            app(ActivityController::class)->logActivity('Acción específica', 'ruta welcome');
            // Redirige a una ruta por defecto o muestra el dashboard
            return redirect('/');
        }
    })->name('dashboard');
});