<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("student",function (){
    $name = "Marin";
    return view("student",["name"=>$name]);

});

Route::get('posts',function (){
    $post1 = "Moj prvi post";
    $imena = ['Marin','Marko','Ivan'];
    return view('posts',['post1'=>$post1,"imena"=>$imena]);
});
