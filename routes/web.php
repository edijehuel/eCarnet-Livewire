<?php

use App\Models\TypeVaccin;
use App\Models\Vaccin;
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

Route::get('/vaccins', function () {
    return Vaccin::with("type")->get();
});

Route::get('/types', function () {
    return TypeVaccin::with("vaccins")->paginate(5);
});