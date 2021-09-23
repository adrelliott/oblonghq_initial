<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('windmill.todo'); });
Route::get('/index', function () { return view('windmill.index'); });
Route::get('/buttons', function () { return view('windmill.buttons'); });
Route::get('/cards', function () { return view('windmill.cards'); });
Route::get('/charts', function () { return view('windmill.charts'); });
Route::get('/forms', function () { return view('windmill.forms'); });
Route::get('/modals', function () { return view('windmill.modals'); });
Route::get('/tables', function () { return view('windmill.tables'); });

Route::get('/404', function () { return view('windmill.404'); });
Route::get('/blank', function () { return view('windmill.blank'); });
Route::get('/create-account', function () { return view('windmill.create-account'); });
Route::get('/forgot-password', function () { return view('windmill.forgot-password'); });
Route::get('/forgot-password', function () { return view('windmill.forgot-password'); });
Route::get('/login', function () { return view('windmill.login'); });



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
