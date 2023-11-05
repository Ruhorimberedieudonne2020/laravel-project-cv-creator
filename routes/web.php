<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

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
Route::get('/cv', function () {
    return view('createCV');
});
Route::get('/main', function () {
    return view('main');
});
// routes for getting all the books
Route::get('/home', [CvController::class, 'index'])->name('main');
//editing the book with existing details
// Route::get('/cv/{cv}/edit', [CvController::class, 'edit'])->name('edit');
// // routes for updating the book details
// Route::put('/cv/{cv}/update', [CvController::class, 'update'])->name('update');
// // routes for deleting the book
// Route::delete('/cv/{cv}', [CvController::class, 'destroy'])->name('cv.destroy');

Route::post('/saveCv', [CvController::class, 'savecv']);