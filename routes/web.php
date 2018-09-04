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
	
]);
App\User::create([
	'name'=> 'graduado',
	'email'=>'graduado@gmail.com',
	'password'=> bcrypt('123123'),
	
]);
*/

Route::get('/', function () {
    return view('index/index');
});

Route::resource('infopersonal','PersonalInformationController');

Route::resource('usuarios','UsersController');

Route::resource('infoacademica','AcademicInformationController');
Route::resource('infolaboral','LaboralInformationController');
Route::resource('admin','AdminController');
Route::resource('solicitudes','SolicitudesController');
Route::resource('consolidado','ConsolidadoController');
Route::resource('posts','PostController');
Route::resource('indexempresa','EmpresaController');
Route::resource('empresa','InformacionPersonalEmpresaController');
/*Route::pactch('pdf/{id}','ConsolidadoController@show')->name('consolidado.pdf');*/
Route::get('pdf/{id}','ConsolidadoController@pdf')->name('consolidado.pdf');


Route::get('/notificaciones', 'NotificacionController@index')->name('notificaciones.index');
Route::patch('notificaciones/{id}','NotificacionController@read')->name('notificaciones.read');
Route::delete('notificaciones/{id}','NotificacionController@destroy')->name('notificaciones.destroy');

Auth::routes();

Route::resource('home', 'HomeController');


Route::get('/usuarios/notificacion/{id}', 'UsersController@Notificar')->name('usuarios.notificar');


