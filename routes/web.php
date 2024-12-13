<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\practise\ExampleController;
use App\Http\Controllers\practise\ItemController;


Route::get('/',[ExampleController::class,'index'])->name('home');

// Route::get('/About',[ExampleController::class,'about'])->name('about');

//item route
Route::get('/item/create',[ItemController::class,'create'])->name('item.create');
Route::post('/item/insert',[ItemController::class,'insert'])->name('item.insert');
Route::get('/item/edit/{id}',[ItemController::class,'edit'])->name('item.edit');
Route::post('/item/update',[ItemController::class,'update'])->name('item.update');
Route::get('/item/delete/{id}',[ItemController::class,'delete'])->name('item.delete');


