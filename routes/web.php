<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\websiteController;

use App\Http\Controllers\Admin\BackendController;




Route::get('/',[websiteController::class,'mywebsite'])->name("website");


Route::get('/about/{id}/{name}',[websiteController::class,'about'])->name("about");



Route::get('/heroform',[BackendController::class,'heroform'])->name("admin.heroform");
Route::get('/herolist',[BackendController::class,'herolist'])->name("admin.herolist");

Route::get('/herodelte/{id}',[BackendController::class,'herodelete'])->name("admin.herodelete");

Route::get('/heroedit/{id}',[BackendController::class,'heroedit'])->name("admin.heroedit");


Route::post('/heroformsave',[BackendController::class,'heroformsave'])->name('admin.heroformsave');

Route::post('/heroforupdate',[BackendController::class,'heroforupdate'])->name('admin.heroforupdate');


Route::get('/contact', function () {

    return "contact";
});

Route::get('/webdevelopemnt', function () {

    return view("service.development");
});

Route::get('/blog', function () {

    return view("blog.blog");
});


Route::get('/dashboard', function () {

    return  view("admin.dashboard");
});

Route::get('userverify',function(){

    Mail::to("hadijaman@gmail.com")->send(new \App\Mail\UserRegisterMail());

    dd("mail send done");

});





