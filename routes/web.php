<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('home', [Controller::class, 'show']);

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
    $name = 'Claudio';
    $age = 38;
    return view('home', compact('name', 'age'));
});

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/about', function () {
    $data = [
        'title' => 'About as',
        'message' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
    ];
    return view('about', compact('data'));
});
    
// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');