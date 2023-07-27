<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use APP\Http\Controllers\FolderController;
use App\Http\Controllers\EmployeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*******************************Folders  ****************************************/
Route::post('create_folder',[App\Http\Controllers\FolderController::class, 'store']);
Route::get('folders',[App\Http\Controllers\FolderController::class, 'index']);

/*******************************Employes  ****************************************/

Route::post('/login', [LoginController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [LoginController::class, 'logout']);
Route::resource('Employes',EmployeController::class);
Route::post('create_employe',[EmployeController::class,'store']);