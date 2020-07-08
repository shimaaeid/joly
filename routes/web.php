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

Route::get('/',function(){
    return view('front/index');
})->name('index-ar');

Route::get('shoes',function(){
    return view('front/shoes-ar');
})->name('shoes-ar');

Route::get('bag',function(){
    return view('front/bag-ar');
})->name('bag-ar');

Route::get('access',function(){
    return view('front/access-ar');
})->name('access-ar');

Route::get('boy',function(){
    return view('front/boy-ar');
})->name('boy-ar');

Route::get('dress',function(){
    return view('front/dress-ar');
})->name('dress-ar');

Route::get('girl',function(){
    return view('front/girl-ar');
})->name('girl-ar');

Route::get('checkout',function(){
    return view('front/checkout');

})->name('checkout');

Route::get('who',function(){
    return view('front/who');
})->name('who');

Route::get('contact',function(){
    return view('front/contact');
})->name('contact');

Route::get('shopping-cart',function(){
    return view('front/shopping-cart');
})->name('shopping-cart');

Route::get('shop-details',function(){
    return view('front/shop-details');
})->name('shop-details');

Route::get('log',function(){
    return view('auth/login');
})->name('log');

Route::get('/locale/{locale}', function($locale){
    Session::put('locale',$locale);
    return redirect()->back();

});


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
