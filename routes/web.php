<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanhsachsinhvienController;
use App\Http\Controllers\SinhvienController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sinhviens', [SinhvienController::class, 'index'])->name('sinhviens.index');

Route::get('/sinhviens/create', [SinhvienController::class, 'create'])->name('sinhviens.create');

Route::post('/sinhviens', [SinhvienController::class, 'store'])->name('sinhviens.store');

// Route::resource('sinhviens', SinhvienController::class);

Route::get('/sinhviens/search', [SinhvienController::class, 'search'])->name('sinhviens.search');

Route::get('/sinhviens/{id}', [SinhvienController::class, 'show'])->name('sinhviens.show');


// Route::get('/sinhviens/search?{id}', action: [SinhvienController::class, 'show'])->name('sinhviens.show');

// Route::get('/sinhviens/{id}/edit', [SinhvienController::class, 'edit'])->name('sinhviens.edit');

// Route::put('/sinhviens/{id}', [SinhvienController::class, 'update'])->name('sinhviens.update');

Route::resource('danhsachsinhviens', DanhsachsinhvienController::class);
Route::get('/danhsachsinhviens/create', [DanhsachsinhvienController::class, 'create'])->name('danhsachsinhviens.create');
Route::get('danhsachsinhviens/totalize/{maSV}', [DanhsachsinhvienController::class, 'totalize'])->name('danhsachsinhviens.totalize');