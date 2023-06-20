<?php

use App\Http\Controllers\simulationsController;
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
    return view('newRoutes.welcome');
}) ->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get("/simulations", [simulationsController::class,"simulationsList"])->name('simulations');
    Route::post("/simulations/create",[simulationsController::class,"createSimulation"])->name('simulation.create');
    Route::post("/simulations/delete",[simulationsController::class,"deleteSimulation"])->name('simulation.deleate');
    Route::get("/simulations/{idSimulacion}",[simulationsController::class,"simulationShow"])->name('simulation.show');
    Route::get("/simulations/{idSimulacion}/costos",[simulationsController::class,"simulationCostos"])->name('simulation.costos');
});
