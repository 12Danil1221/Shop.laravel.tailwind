<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TovarController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [HomeController::class, 'index2'])->name('home');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/tovar', [TovarController::class, 'index'])->name('admin.tovar');
    Route::get('/admin/{tovar}', [TovarController::class, 'show'])->name('admin.show');
    Route::get('/admin/{tovar}/edit', [IndexController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/{tovar}/', [IndexController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{tovar}/', [IndexController::class, 'destroy'])->name('admin.destroy');
    Route::get('/tovarbuy/zayavky', [IndexController::class, 'zayavky'])->name('tovarbuy.zayavky');
    Route::get('/admin/{buy_tovar}/edit2', [BuyController::class, 'edit'])->name('admin.edit2');
    Route::put('/admin/{buy_tovar}/asd', [BuyController::class, 'update'])->name('admin.update2');
    Route::delete('/admin/{buy_tovar}/', [BuyController::class, 'destroy'])->name('admin.destroy');


});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/geolocation', [IndexController::class, 'geolocation'])->name('geolocation');
Route::get('/create', [IndexController::class, 'create'])->name('tovar.create');
Route::post('/', [IndexController::class, 'store'])->name('store');
Route::get('/{tovar}', [IndexController::class, 'show'])->name('tovar.show');


Route::get('/tovarbuy/buy', [IndexController::class, 'Buy'])->name('tovarbuy.buy');
Route::post('/gallary', [IndexController::class, 'stepOne'])->name('stepOne');
Route::post('/admin', [IndexController::class, 'stepTwo'])->name('stepTwo');



