<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\LelangController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\Historiecontroller;


Route::get('/', function () {
    return view('welcome');
});


// route login
route::get('login', [LoginController::class, 'view'])->name('login')->middleware('guest');
route::post('login', [LoginController::class, 'proses'])->name('login.proses')->middleware('guest');
route::get('logout', [LoginController::class, 'logout'])->name('logout-petugas');

// route register
route::get('register', [RegisterController::class, 'view'])->name('register')->middleware(('guest'));
route::post('register', [RegisterController::class, 'store'])->name('register-store')->middleware(('guest'));

// route login sesuai role
route::get('/dashboard/admin', [Dashboard::class, 'admin'])->name('dashboard.admin')->middleware('auth', 'level:admin');
route::get('/dashboard/petugas', [Dashboard::class, 'petugas'])->name('dashboard.petugas')->middleware('auth', 'level:petugas');
route::get('/dashboard/masyarakat', [Dashboard::class, 'masyarakat'])->name('dashboard.masyarakat')->middleware('auth', 'level:masyarakat');

// route login / error
route::view('error/403', 'error.403')->name('error.403');

// BARANG COI ASLI RILL NO FEX 100%
// route::middleware(['auth', 'level:admin'])->group(function () {
//     route::controller(BarangController::class)->group(function () {
//         route::get('barang', 'index')->name('barang.index');
//         route::get('barang/create', 'create')->name('barang.create');
//         route::post('barang', 'store')->name('barang.store');
//         route::get('barang/{barang}', 'show')->name('barang.show');
//         route::get('barang/{barang}/edit', 'edit')->name('barang.edit');
//         route::put('barang/{barang}', 'update')->name('barang.update');
//         route::delete('barang/{barang}', 'destroy')->name('barang.destroy');
//     });
// });

Route::controller(BarangController::class)->group(function() {
    // ROUTE BARANG
    Route::get('barang', 'index')->name('barang.index')->middleware('auth', 'level:admin, petugas');
    Route::get('barang/create', 'create')->name('barang.create')->middleware('auth','level:admin');
    Route::post('barang', 'store')->name('barang.store')->middleware('auth','level:admin');
    Route::get('barang/{barang}', 'show')->name('barang.show')->middleware('auth','level:admin, petugas');
    Route::get('barang/{barang}/edit', 'edit')->name('barang.edit')->middleware('auth','level:admin');
    Route::put('barang/{barang}', 'update')->name('barang.update')->middleware('auth','level:admin');
    Route::delete('barang/{barang}', 'destroy')->name('barang.destroy')->middleware('auth','level:admin');
        });

// LELANG C0I RILL ASLI CAPRUK NO FEK FEK
route::middleware(['auth', 'level:petugas'])->group(function () {
    route::controller(LelangController::class)->group(function () {
        route::get('lelang/create', 'create')->name('lelang.create');
        Route::post('lelang', 'store')->name('lelang.store');
        route::put('lelang/{lelang}', 'update')->name('lelang.update');
        route::delete('lelang/{lelang}', 'destroy')->name('lelang.destroy');
    });
});

Route::controller(lelangController::class)->group(function() {
    // ROUTE lelang
Route::delete('lelang/{lelang}', 'destroy')->name('lelang.destroy')->middleware('auth','level:petugas');
        });

route::middleware('auth', 'level:admin,petugas,masyarakat')->group(function () {
    route::controller(LelangController::class)->group(function () {
        route::get('lelang', 'index')->name('lelang.index');
        route::get('lelang/{lelang}', 'show')->name('lelang.show');
    });
});

route::middleware(['auth', 'level:admin'])->group(function () {
    route::controller(usercontroller::class)->group(function () {
        route::get('user', 'index')->name('user.index');
        route::get('user/create', 'create')->name('user.create');
        route::post('user', 'store')->name('user.store');
        route::get('user/{user}', 'show')->name('user.show');
        route::get('user/{user}/edit', 'edit')->name('user.edit');
        route::put('user/{user}', 'update')->name('user.update');
        route::delete('user/{user}', 'destroy')->name('user.destroy');
    });
});

Route::controller(HistorieController::class)->group(function() {
    //ROUTE HISTORY LELANG
    Route::get('/penawaran/{lelang}', 'create')->name('historie.create')->middleware('auth','level:masyarakat');
    Route::post('/penawaran/{lelang}', 'store')->name('historie.store')->middleware('auth','level:masyarakat');   
    Route::put('/lelang/{id}/status', 'setPemenang')->name('historie.setPemenang');
     });