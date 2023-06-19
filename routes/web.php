<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\templatecontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/salam', function(){
    return view('salam',[
        "nama" => "Muhamad Yafie Akmal",
        "umur" => 19
    ]);
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/tugasform',function(){
    return view('tugasform',[
        "nama"=>"Muhamad Yafie Akmal",
        "tanggal_pemeriksaan"=>"5 April 2023",
        "umur"=>19,
        "jenis_kelamin"=>"laki-laki"
    ]);
});

Route::get('/formulir8', function () {
    return view('formulir8');
});

Route::get('/form',[FormController::class,'index']);
Route::post('/hasil',[FormController::class,'hasil']);

Route::post('/formtugas',[controller8::class,'form']);
Route::post('/hasiltugas',[controller8::class,'hasiltugas']);

// admin
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/pesanan',[PesananController::class,'index']);
    Route::get('/produk',[ProdukController::class,'index']);
    Route::get('/kategori_produk',[KategoriController::class,'index']);
    Route::get('/produk/create',[ProdukController::class,'create']);
    Route::post('/produk/store',[ProdukController::class,'store']);
    Route::get('/produk/edit/{id}',[ProdukController::class,'edit']);
    Route::post('/produk/update/{id}',[ProdukController::class,'update']);
    Route::get('/produk/delete/{id}',[ProdukController::class,'destroy']);

    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('/pesanan/edit/{id}',[PesananController::class, 'edit']);
    Route::post('/pesanan/update/{id}',[PesananController::class, 'update']); 
    Route::get('/pesanan/delete/{id}',[PesananController::class, 'destroy']); 
});

Route::prefix('layout10')->group(function(){
    Route::get('/home',[ControllerFrontend::class,'home']);
    Route::get('/about',[ControllerFrontend::class,'about']);
});

Route::get('/home',[templatecontroller::class,'index']);
Route::get('/about',[aboutcontroller::class,'about']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
