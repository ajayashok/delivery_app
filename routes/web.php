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

    Route::get('/', function () {
        return redirect(route('auth.login'));
    });

    Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function() {
        Route::get('login', 'AuthController@showLoginForm')->name('login');
        Route::post('login', 'AuthController@login')->name('do.login');
        Route::post('logout', 'AuthController@logout')->name('logout');
    });

    Route::group(['namespace' => 'Customer', 'as' => 'customer.'], function() {
        // Customers
        Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
        Route::get('products/view-products', 'ProductController@viewProducts')->name('products');
        Route::get('orders/my-orders', 'OrderController@myOrders')->name('my-orders');
        Route::get('place-order', 'OrderController@placeOrder')->name('place-order');
        Route::get('change-address/{id?}', 'AddressController@changeAddress')->name('change-address');

    });
    Route::group(['namespace' => 'Delivery', 'as' => 'delivery.'], function() {
        // Delivery boy
        Route::get('/delivery-dashboard', 'DashboardController@dashboard')->name('delivery_dashboard');
        Route::get('orders/view-orders', 'DeliveryBoyController@viewOrders')->name('view-orders');
        Route::get('order-status-change', 'DeliveryBoyController@orderStatusChange')->name('order-status-change');
    });
