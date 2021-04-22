<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PalindromeController, MyipController};

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


//Добавить роут для вывода phpinfo();
Route::get('/php', function () {  
    phpinfo();
});

//Роут дял проверки на палиндром
Route::get('/palindrome/', [PalindromeController::class, 'testPalindrome'])->middleware('ipValidation');

//Роут для вывода ip
Route::get('/myip/', [MyipController::class, 'checkIP']);
