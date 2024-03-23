<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\PhoneController;


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

Route::get('/',[StaticController ::class , 'index']) ->name('home.index');
Route::get('/about',[StaticController::class , 'about'] ) ->name('home.about');
Route::get('/contact', [StaticController::class , 'contact']) ->name('home.contact');

//about computer
Route::get('/computers/index',[ComputerController::class , 'index']) ->name('computer.index');

//about phone
Route::get('/phones/index',[PhoneController::class , 'index']) ->name('phone.index');































/*
Route::get('/store/{categorie?}/{item?}', function ($categorie = null , $item = null) {
    if (isset($categorie)){
        if(isset($item)){
            return "<h1>{$item}</h1>";
        }
        return "<h1>{$categorie}</h1>" ;  
    }
    else
       return '<h1> all categories </h1>' ; 
});
*/
