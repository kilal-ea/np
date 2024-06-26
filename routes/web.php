<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\DashController;



Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashController::class, 'dashboard'])->name('d');
    Route::get('/produits', [AdminController::class, 'produits'])->name('produits');

    Route::get('/logout', [loginController::class, 'logout'])->name('logout');
    Route::get('/profile', [loginController::class, 'profile'])->name('profile');
    Route::post('/profile/chnge', [loginController::class, 'changeprofile'])->name('pro');
    Route::get('/deleteuser', [AdminController::class, 'userdeletev'])->name('deleteuser');
    Route::get('/addclient', [AdminController::class, 'addclientsv'])->name('addclients');
    Route::delete('/users/{user}', [AdminController::class, 'destroy'])->name('delete');
    Route::post('/client/{client}', [AdminController::class, 'addclients'])->name('addc');
    Route::get('/clients', [AdminController::class, 'clients'])->name('clients');
    Route::get('/sales/all', [AdminController::class, 'allsales'])->name('allsales');
    Route::post('/bone/{code}', [AdminController::class, 'bonsales'])->name('bonsale');
    Route::get('/clients/deleted', [AdminController::class, 'deletedlientsv'])->name('deletedclients');
    Route::post('/client/deleted/{client}', [AdminController::class, 'deletclient'])->name('delet');
    Route::get('/product/all', [AdminController::class, 'productsv'])->name('prov');
    Route::post('/product/ll', [AdminController::class, 'productsv'])->name('productFilter');

    Route::get('/show/users', [AdminController::class, 'showuser'])->name('showuser');
    Route::post('/show/users', [AdminController::class, 'showuser'])->name('sho');

    Route::post('/user/{user}', [AdminController::class, 'moreuser'])->name('moreuser');
    Route::get('/change/pass/{id}', [AdminController::class, 'pass'])->name('pass');
    Route::post('/password', [AdminController::class, 'changepass'])->name('changepass');
    Route::get('/stock/{id}', [AdminController::class, 'stockuser'])->name('stock');
    Route::get('/add/product', [AdminController::class, 'addprov'])->name('addpro');

    
    
});

    Route::get('/client', [AdminController::class, 'clientsv'])->name('clientsv');
    Route::get('/sales', [AdminController::class, 'sales'])->name('sales');
    Route::get('/', [loginController::class, 'v'])->name('home');
    Route::get('/users', [AdminController::class, 'user'])->name('user');
    Route::get('/add/user', [AdminController::class, 'sv'])->name('add');
    Route::post('/conec', [loginController::class, 'login'])->name('con');
    Route::get('/login', function(){
        return View('login');
    } 
    )->name('login');
    Route::post('/added', [AdminController::class, 'singup'])->name('singup');

    Route::fallback(function () {
        return back()->with('error', 'The requested resource could not be found.');
    });
    