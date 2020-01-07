<?php

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

use App\Http\Controllers\AdminController;
use App\Models\Product;

Route::get('/', function () {
    return view('sign-in');
});

Route::get('/products',function(){
    return Product::select('product_category')->get();
});

Route::get('/users',function(){
    // $d= DB::connection();
    // dd($d);
    dd($request->all());
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard/kpi-bottom-line', 'AdminController@showBottomLineDashboard');
    Route::get('dashboard/profit-sales', 'AdminController@showProfitSalesDashboard');
    Route::get('dashboard/products', 'AdminController@showProductsDashboard');
});


