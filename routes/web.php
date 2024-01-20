<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\PaymentController;
use App\Mail\AguraMarketMail;
use App\Models\Services;


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

    $service=services::all();

    return view('welcome', compact('service'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/welcome', [WelcomeController::class, 'welcome']);

route::get('/stripe/{totalprice}', [PaymentController::class, 'stripe']);
Route::post('stripe/{totalprice}',[PaymentController::class, 'stripePost'])->name('stripe.post');

route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/shop', [HomeController::class, 'index']);

route::get('/contact', [HomeController::class, 'contact']);
route::post('/make_contact', [HomeController::class, 'make_contact']);

route::get('/search_product', [HomeController::class, 'search_product']);
route::get('/product_details/{id}', [HomeController::class, 'product_details']);

route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);
route::get('/show_cart', [HomeController::class, 'show_cart']);
route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);

route::get('/cash_order', [HomeController::class, 'cash_order']);

route::get('/orders', [AdminController::class, 'orders']);
route::get('/search', [AdminController::class, 'searchData']);
route::get('/delivered/{id}', [AdminController::class, 'delivered']);
route::get('/print_pdf/{id}', [AdminController::class, 'print_pdf']);
route::get('/send_email/{id}', [AdminController::class, 'send_email']);
route::post('/send_user_email/{id}', [AdminController::class, 'send_user_email']);

route::get('/view_category', [AdminController::class, 'view_category']);
route::post('/add_category', [AdminController::class, 'add_category']);
route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);
route::get('/update_category/{id}', [AdminController::class, 'update_category']);
route::post('/update_category_confirm/{id}', [AdminController::class, 'update_category_confirm']);

route::get('/view_service', [AdminController::class, 'view_service']);
route::post('/add_service', [AdminController::class, 'add_service']);
route::get('/delete_service/{id}', [AdminController::class, 'delete_service']);
route::get('/update_service/{id}', [AdminController::class, 'update_service']);
route::post('/update_service_confirm/{id}', [AdminController::class, 'update_service_confirm']);

route::get('/view_product', [AdminController::class, 'view_product']);
route::post('/add_product', [AdminController::class, 'add_product']);
route::get('/show_product', [AdminController::class, 'show_product']);
route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);
route::get('/update_product/{id}', [AdminController::class, 'update_product']);
route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

route::get('/view_campaign', [serviceController::class, 'view_campaign']);
route::post('/add_campaign', [serviceController::class, 'add_campaign']);
route::get('/show_campaign', [serviceController::class, 'show_campaign']);
route::get('/delete_campaign/{id}', [serviceController::class, 'delete_campaign']);
route::get('/update_campaign/{id}', [serviceController::class, 'update_campaign']);
route::post('/update_campaign_confirm/{id}', [serviceController::class, 'update_campaign_confirm']);

route::get('/view_contact', [serviceController::class, 'view_contact']);
route::get('/delete_contact/{id}', [serviceController::class, 'delete_contact']);
route::get('/reply_contact/{id}', [serviceController::class, 'reply_contact']);
route::get('/send_user_reply_email/{id}', [serviceController::class, 'send_user_reply_email']);

route::get('/view_implementation', [serviceController::class, 'view_implementation']);
route::get('/view_payroll', [serviceController::class, 'view_payroll']);