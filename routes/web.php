<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;




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

// Praktikum 1 

Route::get('/hello', function () {
    return 'Hello World';
   });
   

Route::get('/world', function () {
    return 'World';
   });
   

Route::get('/salam', function () {
    return 'Selamat Datang';
   });


Route::get('/about', function () {
    return 'Hai! Nama saya Afifah Rahma  NIM : 2241760088';
    });


Route::get('/user/{name}', function ($name) {
        return 'Nama saya '.$name;
    });   

Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
    });
    

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
    });
    

Route::get('/user/{name?}', function ($name='afifah rahma') {
    return 'Nama saya '.$name;
    });



    //Praktikum 2 Controller

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/index', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

//controller photo
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
  'index', 'show'
 ]);
 Route::resource('photos', PhotoController::class)->except([
  'create', 'store', 'update', 'destroy'
 ]);
 

// //Pratikum 3

Route::get('/greeting', function () {
  return view('blog.hello', ['name' => 'Afifah']);
  });

Route::get('/greeting', [WelcomeController::class,
'greeting']);
