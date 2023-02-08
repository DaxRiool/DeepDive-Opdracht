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

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('Register');
});

Route::post('/AddLocationStore/{id?}', [IndexController::class, 'AddLocationStore']);

Route::post('/AddPoiStore', [IndexController::class, 'AddPoiStore']);


Route::get('/AddLocation', function () {
    return view('AddLocation');
});

Route::get('/AddPoi/{Location_ID?}', [IndexController::class, 'AddPoi']);

Route::get('/Pois/{location_id?}', [IndexController::class, 'ShowPois']);

// Route::get('/Poi/{pois_id?}', [IndexController::class, 'ShowSinglePoi']);





Route::get('/AddElement/{pois_id?}', [IndexController::class, 'AddElement']);

Route::post('/AddElementStore', [IndexController::class, 'AddElementStore']);



Route::get('/Poi/{poi_list_id?}', [IndexController::class, 'ShowElements']);

Route::get('/PoiAdd/{pois_id?}', [IndexController::class, 'AddElement']);





Route::get('/Locations', [IndexController::class, 'ShowLocations']);


Route::get('/Login', function () {
    return view('Login');
});

Route::post('/RegisterStore', [UserController::class, 'RegisterStore']);

Route::post('/LoginStore', [UserController::class, 'LoginStore']);

Route::get('/logout', [UserController::class, 'Logout']);

Route::get('/Instruction/{instruction_id?}', [IndexController::class, 'ShowInstruction']);

Route::get('/AddInstruction/{instruction_id?}', [IndexController::class, 'ShowInstruction']);

Route::post('/AddInstructionStore', [IndexController::class, 'ShowInstruction']);
<<<<<<< HEAD
=======


Route::get('/MakeTest/{poi_list_id?}', [IndexController::class, 'MakeTest']);

Route::get('/ShowTest/{poi_list_id?}', [IndexController::class, 'ShowTest']);
>>>>>>> 9453999948be31aebebfb356b3ee24c5ad310c7d
