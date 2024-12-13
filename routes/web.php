<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


route::get('/register', [RegisterController::class, 'register'])->name('register');
route::post('/registerProses', [RegisterController::class, 'registerProses'])->name('registerProses');

route::get('/delete/{id}', [menuController::class, 'delete'])->name('delete'); 
route::get('/edit/{id}', [menuController::class, 'edit'])->name('edit'); 
route::post('/update/{id}', [menuController::class, 'update'])->name('update'); 


route::get('/login', [AuthController::class, 'login'])->name('login');
route::post('/loginProses', [AuthController::class, 'loginProses'])->name('loginProses');


route::get('/landingPage', [landingPageController::class, 'landingPage'])->name('landingPage');

route::get('/create', [menuController::class, 'create'])->name('create');
route::post('/store', [menuController::class, 'store'])->name('store');

Route::get('/menu/{category}', [LandingPageController::class, 'filterMenu'])->name('filterMenu');
