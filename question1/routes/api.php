<?php

use App\Http\Controllers\ApprenantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('apprenant/store',[ApprenantController::class,'store']);
 //Route::resource('apprenant',ApprenantController::class);
 Route::get('apprenant/check/{email}',[ApprenantController::class,'check']);
 Route::get('apprenant',[ApprenantController::class,'index']);
 Route::get('apprenant/{id}',[ApprenantController::class,'show']);
 Route::put('apprenant/update/{id}',[ApprenantController::class,'update']);
 Route::get('idee',[ApprenantController::class,'idee']);
 Route::put('apprenant/accept/{id}',[ApprenantController::class,'AcceptIdee']);
 Route::get('accepter',[ApprenantController::class,'ideeAccepter']);
 Route::get('count',[ApprenantController::class,'count']);
 Route::delete('delete',[ApprenantController::class,'destroy']);

