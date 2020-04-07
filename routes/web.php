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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('consulta','ConsultaController');
Route::resource('detalleh','DetallehController');
Route::resource('diagnostico','DiagnosticoController');
Route::resource('fechadiagnostico','FechadiagnosticoController');
Route::resource('hospital','HospitalController');
Route::resource('laboratorio','LaboratorioController');
Route::resource('medico','MedicoController');
Route::resource('paciente','PacienteController');
Route::resource('sala','SalaController');
