<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Supplier\SupplyController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\User\DispatchController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('login');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->group(function (){
    Route::get('/dashboard',[DashboardController::class, 'admin']);
    
    //category routes    
    Route::get('/category',[CategoryController::class, 'index']);
   
    
});
//users routes
Route::prefix('/user')->group(function (){
    Route::get('/dashboard',[DashboardController::class, 'user']); 
});

//supplier routes
Route::prefix('/supplier')->group(function (){
    Route::get('/dashboard',[DashboardController::class, 'supplier']); 
});
//categories routes
Route::post('/add_category',[CategoryController::class, 'add_category']);
Route::get('/delete_category/{id}',[CategoryController::class, 'delete_category']);

//products routes
Route::get('admin/product',[ProductController::class, 'index']);
Route::post('/add_product',[ProductController::class, 'add_product']);
Route::get('/show_product',[ProductController::class, 'show_product']);
Route::get('/delete_product/{id}',[ProductController::class, 'delete_product']);

Route::get('/generate_pdf',[PdfController::class, 'generate_pdf']);
Route::get('/generate_incoming',[PdfController::class, 'generate_incoming']);

// Route::get('/user_product',[ProductController::class, 'user_product']);
Route::get('/supplier',[SupplyController::class, 'index']);
Route::post('/add_supply',[SupplyController::class, 'add_supply']);
Route::get('/show_supply',[SupplyController::class, 'show_supply']);
Route::get('/delete_supply/{id}',[SupplyController::class, 'delete_supply']);

// Route::get('/send-mail-pdf',[PdfController::class, 'send_mail_pdf']);


// Route::get('/view_dispatch',[DispatchController::class, 'view_dispatch']);
Route::post('/add_dispatch', [DispatchController::class, 'add_dispatch']);

// Route::get('/accept_dispatch',[DispatchController::class, 'accept_dispatch']);

//main dispatching page incoming
Route::get('/dispatch',[DispatchController::class, 'view_dispatch']);

Route::post('/dispatch_product',[DispatchController::class, 'dispatchProduct']);
//showing dispatch products 
Route::get('/show_dispatched_products',[SupplyController::class, 'show_dispatched_products']);

Route::post('/return_product',[SupplyController::class, 'returnProduct']);

Route::get('/show_returned_products',[SupplyController::class, 'show_returned_products']);
Route::get('/show_sent_products',[SupplyController::class, 'show_sent_products']);
Route::get('/return_supply',[SupplyController::class, 'return_supply']);

//Login routes
Route::post('/storedata',[CustomerController::class,'store'])->name('customer.store');
Route::get('/log',[CustomerController::class, 'log'])->name('login');
Route::post('/log', [CustomerController::class, 'login'])->name('customer.login');
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});




// Define the user.dashboard route
Route::get('/user/dashboard', [CustomerController::class, 'user'])->name('user.dashboard');

// Define the admin.dashboard route
Route::get('/admin/dashboard', [CustomerController::class, 'admin'])->name('admin.dashboard');

// Define the supplier.dashboard route
Route::get('/supplier/dashboard', [CustomerController::class, 'supplier'])->name('supplier.dashboard');


    
// In your routes/web.php

Route::post('/logout',[CustomerController::class, 'logout'])->name('logout');



