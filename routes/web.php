<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompaniesController;

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

/*Route::get('/hello', function(){
    return "Hello world";
});*/

/*Route::get('/hello/{name?}', function ($name="Admin"){
    return "Hello ". $name;
});*/

/*Route::get('/user/{name?}', function ($name="Admin"){
    return "Hello ". $name;
});*/

//Route::get('/search',function(Request $request){
    //1-holat
    /*$name = $request->get('name','Ulug\'murod');
    $age = $request->get('age','23');
    $gender = $request->get('gender','erkak');
    return $name." Ismli foydalanuvchi ".$age. " yoshda Jinsi " .$gender;*/

    //2-holat
//    return $request->all();

//});

Route::get('/user/{name?}', [UserController::class,'show']);
Route::get('/users', [UserController::class,'list']);
Route::get('/show/{id}', ShowProfileController::class);
Route::get('/home',[HomeController::class, 'index']);
Route::get('/members',[HomeController::class, 'member']);
Route::get('/about',[HomeController::class, 'about']);

Route::resource('companies',CompaniesController::class);
