<?php

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
  // return view('view.MenuPrincipal');

	$mascota= App\Mascota::findOrFail(1);
     return $mascota->vacunas;
});

Route::resource('Mascotas', 'PetController');

Route::get('MenuPrincipal', function () {
    return view('view.MenuPrincipal');
});


	