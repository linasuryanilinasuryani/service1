<?php

use App\Http\Controllers\AdditionalCost;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\InstitutionController;
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

Route::prefix('/mahasiswa')->group(function (){

});

//route ke view
Route::get('/view-app', function () {
    return view('app');
});
Route::get('/',[App\Http\Controllers\SoalController::class, 'index'])->name('soal');

Route::get('/soal/{id}/edit', [SoalController ::class])->name('soal.edit');

Route::get('/soal/{id}/delete', [SoalController ::class, 'destroy'])->name('soal.delete');


Route::get('/soal', [SoalController::class, 'index'])->name('soal.index');
//route form tambah data
Route::get('/soal/create', [SoalController::class, 'create'])->name('soal.create');
//route form simpan data
Route::get('/soal/{id}/edit', [SoalController::class, 'edit'])->name('soal.edit');
//route form simpan data
Route::put('/soal/{id}/update', [SoalController::class, 'update'])->name('soal.update');
//route form simpan data
Route::post('/soal/store', [SoalController::class, 'store'])->name('soal.store');
//Route::resource('kelas.index',KelasController::class);

//Route::get('/soal/{id}/edit', [SoalController ::class])->name('soal.edit');
//route ke controller
Route::get('test', [TestController::class, 'index']);

Route::get('institution', [InstitutionController::class, 'index'])->name('institution.index');
Route::get('courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('/aditional', [AdditionalCost::class, 'index'])->name('aditional.index');
//route form tambah data
Route::get('/aditional/create', [AdditionalCost::class, 'create'])->name('aditional.create');
//route form simpan data
Route::get('/aditional/{id}/edit', [AdditionalCost::class, 'edit'])->name('aditional.edit');
//route form simpan data
Route::post('/aditional/{id}/update', [AdditionalCost::class, 'update'])->name('aditional.update');
//route form simpan data
Route::post('/aditional/store', [AdditionalCost::class, 'store'])->name('aditional.store');
//Route::resource('kelas.index',KelasController::class);
Route::get('/aditional/{id}/delete', [AdditionalCost ::class, 'destroy'])->name('aditional.delete');
