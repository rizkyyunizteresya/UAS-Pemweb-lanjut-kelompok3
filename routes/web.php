<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

route::get('/',[AdminController::class,'home']);



route::get('/home',[AdminController::class, 'index'])->name('home');

route::get('/create_option',[AdminController::class,'create_option']); //buat pilihan

route::post('/add_option',[AdminController::class,'add_option']); //tambah pilihan (terusan)

route::get('/view_option',[AdminController::class,'view_option']); //tampilkan data

route::get('/option_delete/{id}',[AdminController::class,'option_delete']); //CRUD PART1

route::get('/option_update/{id}',[AdminController::class,'option_update']); //CRUD PART 2

route::post('/option_edit/{id}',[AdminController::class,'option_edit']); //CRUD PART 2.2

route::get('/option_update/{id}',[AdminController::class,'option_update']); //CRUD PART 2.2.1

route::get('/detail/{id}',[HomeController::class,'detail']); //frontend our option

route::post('/add_booking/{id}',[HomeController::class,'add_booking']); //booking di our option

route::get('/bookings',[AdminController::class,'bookings']);

route::get('/delete_booking/{id}',[AdminController::class,'delete_booking']);

route::get('/approve_booking/{id}',[AdminController::class,'approve_booking']);

route::get('/reject_booking/{id}',[AdminController::class,'reject_booking']);

route::post('/contact',[HomeController::class,'contact']);

route::get('/messages',[AdminController::class,'messages']);

route::get('/reply/{id}',[AdminController::class,'reply']);
