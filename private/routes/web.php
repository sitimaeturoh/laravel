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
    return view('wisata.admin.lihat');
});


Route::get('wisata/index', function () {
    return view('wisata/index');
});

Route::get('dtpengunjung', function () {
    return view('wisata/admin/dtpengunjung');
});

Route::get('post', function () {
    return view('wisata/admin/post');
});

Route::get('lihat', function () {
    return view('wisata/admin/lihat');
});


Route::get('profil', function () {
    return view('wisata/admin/profil');
});


Route::get('wisata/home', function () {
    return view('wisata/home');
});


Route::get('wisata/detailwisata', function () {
    return view('wisata/detailwisata');
});

Route::get('wisata/detailwisata2', function () {
    return view('wisata/detailwisata2');
});

Route::get('wisata/wisata', function () {
    return view('wisata/wisata');
});

Route::get('wisata/about', function () {
    return view('wisata/about');
});

Route::get('wisata/dokumentasi', function () {
    return view('wisata/dokumentasi');
});

Route::get('template', function () {
    return view('template');
});

Route::get('login', function () {
    return view('wisata/admin/login');
});
