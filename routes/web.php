<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminPagesController;

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


Route::get('/clear', function() {
   Artisan::call('cache:clear');
   Artisan::call('config:clear');
   Artisan::call('config:cache');
   Artisan::call('view:clear');
   return "Cleared!";
});

Route::get('/runcommand', function() {
   // Artisan::call('make:controller PagesController');
   // Artisan::call('make:controller AdminPagesController');
   // Artisan::call('make:model ConstructionCalculatorFoundationtype -m');
   //Artisan::call('make:model ConstructionCalculatorPlumbing -m');
   // Artisan::call('make:model ConstructionCalculatorWindow -a');
   //Artisan::call('migrate');

   // return "Done";
});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/',[PagesController::class, 'home']);
Route::get('/product-detail',[PagesController::class, 'productdetail']);
Route::get('/category-inner',[PagesController::class, 'categoryinner']);
Route::get('/cart',[PagesController::class, 'cart']);
Route::get('/checkout',[PagesController::class, 'checkout']);
Route::get('/account',[PagesController::class, 'account']);
Route::get('/my-profile',[PagesController::class, 'myprofile']);
Route::get('/my-orders',[PagesController::class, 'myorders']);
Route::get('/invoice',[PagesController::class, 'invoice']);
Route::get('/testimonial',[PagesController::class, 'testimonial']);
Route::get('/about-us',[PagesController::class, 'aboutus']);
Route::get('/contact-us',[PagesController::class, 'contactus']);
Route::get('/help',[PagesController::class, 'help']);

Route::get('/admin',[AdminPagesController::class, 'home']);
Route::get('/admin/manage-product',[AdminPagesController::class, 'manageproduct']);





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
