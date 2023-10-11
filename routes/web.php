<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('inicio');
});

Route::get('/convocatoria', function () {
    return view('convocatoria');
});

Route::get('/organizadores', function () {
    return view('organizadores');
});

Route::get('/categorias', function () {
    return view('categorias');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('post', PostController::class);
// php artisan route:list

//Route::get('/post', [PostController, 'index']);
//Route::get('/post/{post}', [PostController, 'show']);
//Route::get('/post/create', [PostController, 'create']);
//Route::get('/post/{post}/edit', [PostController, 'edit']);
//Route::post('/post', [PostController, 'store']);
//Route::put('/post/{post}', [PostController, 'update']);
//Route::delete('/post/{post}', [PostController, 'delete']);
