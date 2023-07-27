
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


Auth::routes(['verify' => true]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('artikel.')
    ->controller(ArtikelController::class)
    ->group(function () {
        Route::get('/', 'show')->name('show');
        Route::get('/add', 'add')->name('add');
        Route::post('/add_process', 'add_process')->name('add_process');
        Route::get('/detail/{id}', 'detail')->name('detail');
        Route::get('/admin', 'show_by_admin')->name('show_by_admin');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/edit_process', 'edit_process')->name('edit_process');
        Route::get('/delete/{id}', 'delete')->name('delete');

    });
