<?php

use Illuminate\Support\Facades\Route;
use App\Models\form;

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
Route::get('/form', function () {
    return view('form');
});
Route::post('/form', function () {
    form::create([
       "name" => request('name'),
       "email" => request('email'),
       "message"=> request('message'),
    ]);

    return redirect('/form');
  /*$form = new form();
  $form->name= request('name');
  $form->email= request('email');
  $form->message= request('message');
  $form->save();*/

});
