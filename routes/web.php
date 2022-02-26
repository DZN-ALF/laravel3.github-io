<?php
use Appmodels\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProsesController;


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
    return view('home', [ 
        "title" => "Home",
        "active" => 'home',]);
});
Route::get('/About', function () {
    return view('About', [
        "title" => "About",
        "name"=>"ZULFIKAR ALFIANSYAH",]);
});
Route::get('/Blogs', function () {
    return view('Blogs', [
        "title" => "Blogs",
    ]); 
});

Route::get('/pesan', [PesanController::class, 'index']); 

Route::post('/proses', [ProsesController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
     