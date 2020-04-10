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
})->name('inicio');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Admin/users','Admin\UserController')->middleware('can:administrar-usuarios');
Route::resource('consulta','ConsultaController')->middleware('can:consulta-entrada');
Route::resource('detalleh','DetallehController');
Route::resource('diagnostico','DiagnosticoController')->middleware('can:diagnostico-paciente');
Route::resource('fechadiagnostico','FechadiagnosticoController');
Route::resource('hospital','HospitalController')->middleware('can:hospital-entrada');
Route::resource('laboratorio','LaboratorioController')->middleware('can:laboratorio-entrada');
Route::resource('medico','MedicoController')->middleware('can:medico-entrada');
Route::resource('paciente','PacienteController')->middleware('can:paciente-entrada');
Route::resource('sala','SalaController')->middleware('can:sala-entrada');
