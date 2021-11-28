<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProtfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServicesDetailController;
use App\Http\Controllers\TeamController;
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
    return view('user.home');
});
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/ourcompany', [CompanyController::class, 'ourcompany'])->name('ourcompany');
Route::get('/ourteam', [TeamController::class, 'ourteam'])->name('ourteam');
Route::get('/portfolio', [ProtfolioController::class, 'portfolio'])->name('portfolio');
Route::get('/ourservices', [ServicesController::class, 'ourservices'])->name('ourservices');
Route::get('/servicedetails', [ServicesDetailController::class, 'servicedetails'])->name('servicedetails');
Route::get('/blogdetails', [BlogDetailController::class, 'blogdetails'])->name('blogdetails');
