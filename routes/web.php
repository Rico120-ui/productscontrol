<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// }) -> name('homepage');

route::get("/testing/{id}/{name?}" , function($id , $name=null){
    // $v1 = 90;
    // $v2 = 100;
    // $sum = $v1 + $v2;
    // return $sum;

    // echo "ID: $id <br>";
    // echo "Student name: $name <br>";

    return view('testing', compact('id' , 'name'));

    // ? => optional
})-> where (['id'=>'^[0-9]+$' , 'name'=>'^
*$']);

Route::view('/' , 'index') ->name ('homepage');;

Route::get('/aboutus', function () {
    return view('aboutus');
}) -> name('aboutpage');

Route::get('/contact', function () {
    return view('contact');
}) -> name('contactpage');



// Route::get('/products',  [ProductController::class, 'index']);
// Route::get('/products/create',  [ProductController::class, 'create']);

Route::resource('/products' , ProductController::class);

Route::get('/products/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
    
// add this
// Route::get('/product', function () {
//     return \App\Models\Product::all();
// });



// [a-zA-Z \.] => can input a-z , A-Z , space , .

// * => can input only letter or input only number...
