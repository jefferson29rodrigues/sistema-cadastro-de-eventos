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
});

Route::get('/ranking', function () {
    $colocacao = 6;

    $arr = [1, 2, 3, 4, 5];
    $top5 = [$primeiro, $segundo, $terceiro, $quarto, $quinto];
    
    return view('ranking', 
        [
            'posicao' => $colocacao,
            'positions' => $arr
        ]
    );
});

Route::get('/chat', function () {
    return view('/forum');
});
