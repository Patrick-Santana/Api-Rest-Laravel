<?php

use App\Http\Controllers\Api\AlunoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::name('api.')->group(function(){
    Route::resource('/alunos', AlunoController::class);

    Route::get('/livros', [AlunoController::class, 'index']);
    Route::get('/livros/{id}', [AlunoController::class, 'show']);
    Route::post('/livros', [AlunoController::class, 'store']);
    Route::put('/livros/{id}', [AlunoController::class, 'update']);
    Route::delete('/livros{id}', [AlunoController::class, 'destroy']);
});
