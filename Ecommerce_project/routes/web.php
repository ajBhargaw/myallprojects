<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [productController::class,'index']);

Route::get('/login', function () {
    return view('login');
});
Route::post('login', [userController::class,'login']);

Route::get('userlogout', function () {
    Session::forget('user');
    return Redirect('login');
});

Route::view('register', 'register');
Route::post('register', [userController::class,'register']);

Route::view('admin', 'admin/admin');
Route::post('adminlogin', [adminController::class,'adminLogin']);
Route::view('addproductform', 'admin/admin_product_add');
Route::post('addproduct', [productController::class,'addproduct']);
Route::get('logout', function(){
    if(session()->has('admin')){
        session()->flush();
        return  redirect('/');
    }
});

Route::get('detail/{id}', [productController::class,'details']);
Route::post('/add_to_card', [productController::class,'addToCard']);
Route::get('/cartList', [productController::class,'cartList']);
Route::get('/removecart/{id}', [productController::class,'removecart']);
Route::get('/ordernow', [productController::class,'ordernow']);
Route::post('/orderplace', [productController::class,'orderplace']);
Route::get('/myorders', [productController::class,'myorders']);
// if(session()->has('user')){
//     Route::get('/myorders', [productController::class,'myorders']);
// }else{
    
//     return redirect('/');
// }

