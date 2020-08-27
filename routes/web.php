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

//CONTROLER ADMIN
Route::get('/login', 'AdminController@login');
Route::get('/fiskomfor', 'AdminController@fiskomfor');
Route::get('/kimbiofor', 'AdminController@kimbiofor');
Route::get('/narkobafor', 'AdminController@narkobafor');
Route::get('/dokupalfor', 'AdminController@dokupalfor');
Route::get('/balmetfor', 'AdminController@balmetfor');
Route::get('/smile', 'AdminController@smile');

//KAPUS
Route::get('/kapus', 'KapusController@index');
Route::get('/kapus/visualgrafis', 'KapusController@visualgrafis');
Route::get('/kapus/visualgrafis/gabungan', 'KapusController@visualgrafisgabungan');
Route::get('/kapus/visualgrafis/jakarta', 'KapusController@visualgrafisjakarta');
Route::get('/kapus/visualgrafis/riau', 'KapusController@visualgrafisriau');
Route::get('/kapus/visualgrafis/papua', 'KapusController@visualgrafispapua');
Route::get('/kapus/visualgrafis/medan', 'KapusController@visualgrafismedan');
Route::get('/kapus/visualgrafis/palembang', 'KapusController@visualgrafispalembang');
Route::get('/kapus/visualgrafis/semarang', 'KapusController@visualgrafissemarang');
Route::get('/kapus/visualgrafis/surabaya', 'KapusController@visualgrafissurabaya');
Route::get('/kapus/visualgrafis/denpasar', 'KapusController@visualgrafisdenpasar');
Route::get('/kapus/visualgrafis/makassar', 'KapusController@visualgrafismakassar');

//controller gabungan PER-BULAN
Route::get('/kapus/visualgrafis/gabungan/2020/januari', 'KapusController@januari2020');
Route::get('/kapus/visualgrafis/gabungan/2020/februari', 'KapusController@februari2020');
Route::get('/kapus/visualgrafis/gabungan/2020/maret', 'KapusController@maret2020');
Route::get('/kapus/visualgrafis/gabungan/2020/april', 'KapusController@april2020');
Route::get('/kapus/visualgrafis/gabungan/2020/mei', 'KapusController@mei2020');
Route::get('/kapus/visualgrafis/gabungan/2020/juni', 'KapusController@juni2020');
Route::get('/kapus/visualgrafis/gabungan/2020/juli', 'KapusController@agustus2020');
Route::get('/kapus/visualgrafis/gabungan/2020/agustus', 'KapusController@maret2020');
Route::get('/kapus/visualgrafis/gabungan/2020/september', 'KapusController@september2020');
Route::get('/kapus/visualgrafis/gabungan/2020/oktober', 'KapusController@oktober2020');
Route::get('/kapus/visualgrafis/gabungan/2020/november', 'KapusController@november2020');
Route::get('/kapus/visualgrafis/gabungan/2020/desember', 'KapusController@desember2020');


Route::get('/kapus/tracking', 'KapusController@tracking');
Route::get('/kapus/trackingtakah', 'KapusController@trackingtakah');
Route::get('/kapus/trackingkategoritakah', 'KapusController@trackingkategoritakah');
Route::get('/kapus/trackingtersangka', 'KapusController@trackingtersangka');
Route::get('/kapus/trackingkategoritersangka', 'KapusController@trackingkategoritersangka');


Route::get('/kapus/feedback', 'KapusController@feedback');
Route::get('/kapus/feedback/jakarta', 'KapusController@feedbackjakarta');
Route::get('/kapus/feedback/riau', 'KapusController@feedbackriau');
Route::get('/kapus/feedback/papua', 'KapusController@feedbackpapua');
Route::get('/kapus/feedback/input', 'KapusController@feedbackinput');
Route::get('/kapus/feedback/status', 'KapusController@formstatustakah');
