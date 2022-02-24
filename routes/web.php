<?php
use App\Http\Controllers\BahanController;
use App\Http\Controllers\AlatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::prefix('bahan')->group(function(){
    Route::get('/',[BahanController::class, 'index'])->name('bahan.index');
    Route::get('/create',[BahanController::class, 'create'])->name('bahan.create');
    Route::post('/store',[BahanController::class,'store'])->name('bahan.store');
    Route::get('/{bahan}/edit',[BahanController::class, 'edit'])->name('bahan.edit');
    Route::get('/{bahan}',[BahanController::class,'update'])->name('bahan.update');
    Route::get('/{bahan}/destroy',[BahanController::class, 'destroy'])->name('bahan.destroy');
});
// Route::prefix('alat')->group(function(){
//     Route::get('/alat',[BahanController::class, 'index'])->name('alat.index');
//     Route::get('/alat/create',[BahanController::class, 'create'])->name('alat.create');
//     Route::post('/alat/store',[BahanController::class],'store')->name('alat.store');
//     Route::get('/alat/{alat}/edit',[BahanController::class, 'edit'])->name('alat.edit');
//     Route::get('/alat/{alat}',[BahanController::class,'update'])->name('alat.update');
// });



