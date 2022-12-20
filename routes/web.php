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



Auth::routes();

Route::livewire('/','home')->name('home');
Route::livewire('/product','product-index')->name('product');
Route::livewire('/product/{id}','product-details')->name('products.detail');
Route::livewire('/under-construction','under-construction')->name('under-construction');
Route::livewire('/faq','faq')->name('faq');
Route::livewire('/about','about')->name('about');
Route::livewire('/products/city/{kotaid}','products-city')->name('products.city');
Route::livewire('/products/depot/{depotid}','products-depot')->name('products.depot');
Route::livewire('/joinus','join-us')->name('joinus');
Route::livewire('/find-depot','find-depots')->name('find.depot');
Route::livewire('/cart','cart')->name('cart');
Route::livewire('/checkout','checkout')->name('checkout');

