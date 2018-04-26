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
/*App\User::create([
	'name'=> 'administrador',
	'email'=>'administrador@gmail.com',
	'password'=> bcrypt('123123'),
	
]);
App\User::create([
	'name'=> 'empresa',
	'email'=>'empresa@gmail.com',
	'password'=> bcrypt('123123'),
	
]);*/

Route::get('/', function () {
    return view('index/index');
});

Route::resource('infopersonal','PersonalInformationController');

Route::resource('usuarios','UsersController');

Route::resource('infoacademica','AcademicInformationController');
Route::resource('infolaboral','LaboralInformationController');
Route::resource('admin','AdminController');
Route::resource('solicitudes','SolicitudesController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

