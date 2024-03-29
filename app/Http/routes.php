<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Front;

Route::get('/', 'Front@index');

Route::get('/products', 'Front@products');

Route::get('/products/details/{id}', 'Front@product_details');

Route::get('/products/categories', 'Front@product_categories');

Route::get('/products/brands', 'Front@product_brands');

Route::get('/blog', 'Front@blog');

Route::get('/blog/post/{id}', 'Front@blog_post');

Route::get('/contact-us', 'Front@contact_us');

Route::get('/login', 'Front@login');

Route::get('/logout', 'Front@logout');

Route::get('/checkout', 'Front@checkout');

Route::get('/cart', 'Front@cart');

Route::get('/search/{query}', 'Front@search');

