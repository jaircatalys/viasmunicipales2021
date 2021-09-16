<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TipodevehiculoController;
use App\Http\Controllers\NacionalidadController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ReciboController;







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

Route::get('/', HomeController::class);

Route::get('turnos',[TurnoController::class,'index']);
Route::get('turnos/create',[TurnoController::class,'create']);
Route::get('turnos/{turno}',[TurnoController::class,'show']);

Route::get('usuarios',[UsuarioController::class,'index']);
Route::get('usuarios/create',[UsuarioController::class,'create']);
Route::get('usuarios/{usuario}',[UsuarioController::class,'show']);

Route::get('tiposdevehiculos',[TipodevehiculoController::class,'index']);
Route::get('tiposdevehiculos/create',[TipodevehiculoController::class,'create']);
Route::get('tiposdevehiculos/{tipodevehiculo}',[TipodevehiculoController::class,'show']);


Route::get('Nacionalidad',[NacionalidadController::class,'index']);
Route::get('Nacionalidad/create',[NacionalidadController::class,'create']);
Route::get('Nacionalidad/{Nacionalidad}',[NacionalidadController::class,'show']);

Route::get('Vehiculos',[VehiculoController::class,'index']);
Route::get('Vehiculos/create',[VehiculoController::class,'create']);
Route::get('Vehiculos/{Vehiculo}',[VehiculoController::class,'show']);


Route::get('Conductores',[ConductorController::class,'index']);
Route::get('Conductores/create',[ConductorController::class,'create']);
Route::get('Conductores/{Conductor}',[ConductorController::class,'show']);


Route::get('Empresas',[EmpresaController::class,'index']);
Route::get('Empresas/empresa',[EmpresaController::class,'create']);
Route::get('Empresas/{empresa}',[EmpresaController::class,'show']);

Route::get('Recibos',[ReciboController::class,'index']);
Route::get('Recibos/recibo',[ReciboController::class,'create']);
Route::get('Recibos/recibo{}',[ReciboController::class,'show']);