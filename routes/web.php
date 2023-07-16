<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers;

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
/*
Route::get('/', function () {
    return view('login');
});
*/
Route::any('',array('uses'=>'App\Http\Controllers\HomeController@login'));
Route::any('home',array('uses'=>'App\Http\Controllers\HomeController@home'));

Route::any('modal/nuovo-cliente', [HomeController::class, 'salvaCliente']);
Route::post('/salva-cliente', 'App\Http\Controllers\HomeController@salvaCliente')->name('salva.cliente');
