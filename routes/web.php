<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/products', [ProductController::class, 'AllProducts']) -> name('all.products'); //display all products
Route::get('/product/add', [ProductController::class, 'AddProduct']) -> name('add.product'); //go to add product page
Route::post('/product/create', [ProductController::class, 'CreateProduct']) -> name('create.product'); //add new product
Route::get('/product/edit/{id}', [ProductController::class, 'Edit']); //go to edit product page
Route::post('/product/update/{id}', [ProductController::class, 'UpdateProduct']); //update product
Route::get('/product/delete/{id}', [ProductController::class, 'Delete']);//delete product
Route::get('/product/search', [ProductController::class, 'Search']);//search
Route::get('/user/logout', [ProductController::class, 'Logout']) -> name('user.logout'); //logout