<?php

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

Route::get("/about-me", function () {
    return "Nama Saya <b>Nur Aini Oktavia</b>";
});

Route::get("/alamat", function () {
    return "Alamat Saya Jalan Anggrek sp 5";
});

Route::get("/kartun", function () {
    return "Kartun yang Saya sukai adalah Doaremon";
});

Route::get("/olahrga", function () {
    return "Olahraga dimasa pandemi ini sangat penting untu menjaga kesehatan tubuh kita!";
});

Route::get("/senyum", function () {
    return "Tersenyum adalah salah satu bentuk ibadah loh!";
});

Route::get("/agama", function () {
    return "Agama Saya adalah Islam";
});

use App\Http\Controllers\Controller1;
Route::get("/okta/satu", [Controller1::class, "satu"]);
Route::get("/okta/dua", [Controller1::class, "dua"]);
Route::get("/okta/tiga", [Controller1::class, "tiga"]);

use App\Http\Controllers\Controller2;
Route::get("/okta/empat", [Controller2::class, "empat"]);
Route::get("/okta/lima", [Controller2::class, "lima"]);
Route::get("/okta/enam", [Controller2::class, "enam"]);
