<?php

use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group([
    'prefix' => 'alunos'
], function($router) {
    Route::get('/', 'AlunosController@index');
    Route::post('/', 'AlunosController@store');
    Route::put('/{turma}', 'AlunosController@update');
    Route::delete('/{turma}', 'AlunosController@destroy');
});

Route::group([
    'prefix' => 'professores'
], function($router) {
    Route::get('/', 'ProfessoresController@index');
    Route::post('/', 'ProfessoresController@store');
    Route::put('/{turma}', 'ProfessoresController@update');
    Route::delete('/{turma}', 'ProfessoresController@destroy');
});

Route::group([
    'prefix' => 'turmas'
], function($router) {
    Route::get('/', 'TurmasController@index');
    Route::post('/', 'TurmasController@store');
    Route::put('/{turma}', 'TurmasController@update');
    Route::delete('/{turma}', 'TurmasController@destroy');
});