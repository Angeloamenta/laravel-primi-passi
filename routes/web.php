<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data = [
        'name'=> 'Pippo',
        'lastname'=> 'paperino',
        'age'=> 90
    ];
    return view('home', $data);
});

Route::get('/chisiamo', function () {
         return view('chi_siamo');
})->name('chisiamo');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/contattaci', function () {
    return view('contattaci');
})->name('contattaci');
     