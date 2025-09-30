<?php

use App\Models\Tarefa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/somar/{x}/{y}', function($x, $y) {
    return $x + $y;
});

Route::get('/info', function(){
    $dados = [
        'nome' => 'Eusébio',
        'idade' => '18',
        'cidade' => 'Bento Gonçalves',
        'fruta favorita' => 'amora'
    ];

    return response()->json($dados, 200);
});

Route::get('/tarefas', function() {
    //return Tarefa::all();
    return Tarefa::imaginate(5);
});