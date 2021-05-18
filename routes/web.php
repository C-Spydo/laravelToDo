<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
    // return view('welcome');
    return view('todo');
});

Route::get('/', [TaskController::class,'index']);
Route::post("/task", [TaskController::class,'store']);
Route::get("/{id}/complete", [TaskController::class,'complete']);
Route::get("/{id}/update", [TaskController::class,'update']);
Route::get("/{id}/delete", [TaskController::class,'destroy']);
