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
    return view('welcome', array('nombre'=>'Efrain'));
});

Route::get('/login', function (){
    return view('user.login');
});


Route::get('/register', function (){
    return view('user.register');
});


Route::get('/profile', function (){
    return view('user.profile');
});

Route::get('usuario/{nombre}/{edad}',function ($nombre, $edad) {
    return "Mi nombre es: {$nombre} y mi edad es {$edad}";
});

Route::get('/cliente/datos', function (){
    return 'Estos son los datos del cliente'.$_GET['id'];
});