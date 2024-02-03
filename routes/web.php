<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/about/{name}/{id}', function 
// (string $name ,int $id) {
//     return view('about')->with(compact('id','name'));
// });

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contactpage');


// Route::get('/home', function () {
//     return view('home');
// })->name('home');

// Route::get('/navbar', function () {
//     return view('navbar');
// });
Route::get('/',[studentcontroller::class ,'home']);
Route::get('/about',[studentcontroller::class ,'about'])->name('aboutpage');
Route::get('/contact',[studentcontroller::class ,'contact'])->name('contactpage');
Route::get('/gallery',[studentcontroller::class ,'gallery'])->name('gallerypage');
