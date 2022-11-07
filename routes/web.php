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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ['Kevin' => 70, 'Ivana' => 62, 'Naomi' =>75, 'Grace' => 59];
    $class = 'LG01';
    return view('mahasiswa')->with
    ('mahasiswa', $arrMahasiswa)->with('class', $class);
});

Route::get('/dosen', function () {
    $arrDosen = ['Lili', 'Cecilia'];
    return view('dosen')->with
    ('dosen', $arrDosen);
});
