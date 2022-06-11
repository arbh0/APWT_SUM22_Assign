<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

/*Route::get('/', function () {
    return view('home');
}); */


Route::get('/',[PagesController::class,'home'])->name('home');
Route::get('/register',[PagesController::class,'register'])->name('user.register');
Route::get('/login',[PagesController::class,'login'])->name('user.login');


Route::post('/register',[LoginController::class,'registerSubmit'])->name('register.submit');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');


Route::get('/userdashboard',[UserController::class,'dashboard'])->name('interface.dashboard');
Route::get('/userlist',[UserController::class,'userlist'])->name('interface.userlist');
Route::get('/userlist/details/{id}',[UserController::class,'userdetails'])->name('interface.userdetails');

Route::get('/admindashboard',[UserController::class,'dashboardadmin'])->name('interface.dashboardadmin');
Route::get('/alluserlist',[UserController::class,'alluserlist'])->name('interface.alluserlist');
Route::get('/alluserlist/details/{id}',[UserController::class,'alluserdetails'])->name('interface.alluserdetails');