<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Reporte;

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
Route::get('paciente-pdf{buscar}',[Reporte::class,'listpaciente']);
Route::get('datos_paciente-pdf',[Reporte::class,'listdatos']);
