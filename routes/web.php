<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\mainController;
use App\http\controllers\adminController;
use App\http\controllers\cController;
use App\http\controllers\mController;

Route::get('/',[mainController::class,'index']);
Route::get('/about',[mainController::class,'about']);
Route::get('/logout',[mainController::class,'logout']);
Route::get('/contact',[mainController::class,'contact']);
Route::get('/shop',[mainController::class,'shop']);
Route::get('/wishlist',[mainController::class,'wishlist']);
Route::get('/contact',[mainController::class,'contact']);

//admin
Route::get('/adminhome',[adminController::class,'ahome']);
Route::get('/adminlogin',[adminController::class,'alogin']);
Route::post('/adlogaction',[adminController::class,'adlog']);
Route::get('/addabout',[adminController::class,'about']);
Route::get('/vabout',[adminController::class,'vabout']);
Route::get('/viewusers',[adminController::class,'viewusers']);
Route::get('/vmanagers',[adminController::class,'vmanager']);
Route::post('/addabt',[adminController::class,'addabt']);
Route::get('/addcontact',[adminController::class,'contact']);
Route::get('/approvem/{id}',[adminController::class,'approve']);
Route::get('/declinem/{id}',[adminController::class,'decline']);
Route::get('/approvep/{id}',[adminController::class,'approvep']);
Route::get('/declinep/{id}',[adminController::class,'declinep']);
Route::post('/addcntct',[adminController::class,'addcntct']);
Route::get('/appproduct',[adminController::class,'product']);
Route::get('/editabout/{id}',[adminController::class,'edabout']);
Route::post('/editabt/{id}',[adminController::class,'editabt']);

//manger
Route::get('/mreg',[mController::class,'mreg']);
Route::get('/mlog',[mController::class,'mlog']);
Route::post('/mregaction',[mController::class,'mregaction']);
Route::post('/mlogaction',[mController::class,'login']);
Route::get('/mhome',[mController::class,'home']);
Route::get('/viewproduct',[mController::class,'view']);
Route::get('/addproducts',[mController::class,'add']);
Route::post('/adpaction',[mController::class,'adpaction']);
Route::get('/editp/{id}',[mController::class,'editp']);
Route::get('/viewcust',[mController::class,'viewcust']);
Route::post('/edpaction/{id}',[mController::class,'edpaction']);

//user
Route::get('/creg',[cController::class,'creg']);
Route::get('/clog',[cController::class,'clog']);
Route::post('/cregaction',[cController::class,'cregaction']);
Route::post('/clogaction',[cController::class,'login']);
Route::get('/chome',[cController::class,'home']);
Route::get('/ccontact',[cController::class,'ccontact']);
Route::get('/viewproducts',[cController::class,'view']);
Route::get('/ccart',[cController::class,'cart']);
Route::get('/addcart/{id}',[cController::class,'addcart']);
Route::get('/wish/{id}',[cController::class,'wish']);
Route::post('/addwish/{id}',[cController::class,'addwish']);
Route::get('/cwishlist',[cController::class,'cwishlist']);
Route::get('/vccart',[cController::class,'vccart']);
Route::get('/delete/{id}',[cController::class,'deletez']);
Route::get('/totalprize/{id}',[cController::class,'total']);
Route::get('/proceed',[cController::class,'proceed']);
Route::get('/viewtotal',[cController::class,'viewtotal']);
Route::post('/bookp',[cController::class,'bookp']);
Route::get('/vieworders',[cController::class,'vieworders']);
Route::get('/payment',[cController::class,'payment']);