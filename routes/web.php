<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\SellerAuthController;
use App\Http\Middleware\AuthCustomer;
use App\Http\Middleware\AuthSeller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupportTicketController;
use App\Http\Controllers\Seller\ProductController as SellerProductController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\SellerController as AdminSellerController;
use App\Http\Controllers\admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\admin\DiscountController as AdminDiscountController;


Route::get('/', function () {
    return view('consumer.welcome');
})->name('home');


Route::get('/register', [CustomerAuthController::class, 'showForm']);
Route::post('/register', [CustomerAuthController::class, 'register'])->name('registerbutton');

Route::get('/customer/login', [CustomerAuthController::class, 'showForm'])->name('customer_auth');
Route::post('/customer/login', [CustomerAuthController::class, 'login']);
Route::post('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer_logout');
Route::get('/customer/profile', [CustomerAuthController::class, 'showProfile'])->name('cprofile');

Route::middleware([AuthCustomer::class])->group(function () {
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.index');
    Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::put('/cart/update/{product_id}', [CartController::class, 'updateQuantity'])->name('cart.update');


    Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');

});

Route::get('/pay-now/{orderId}', [PaymentController::class, 'payNow'])->name('payment.pay');

Route::post('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::match(['get', 'post'], '/payment/fail', [PaymentController::class, 'fail'])->name('payment.fail');
Route::match(['get', 'post'], '/payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');

// Route::get('/customerprofile', function () {
//     return view('consumer.customerProfile');
// })->name('cprofile');


Route::get('/contact', function () {
    return view('consumer.contact');
})->name('contact');

Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/shop/category/{id}', [ProductController::class, 'category'])->name('shop.category');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');




Route::get('/recipes', function () {
    return view('consumer.recipes');
})->name('recipes');

Route::get('/farmers', function () {
    return view('consumer.farmers');
})->name('farmers');

Route::get('/about', function () {
    return view('consumer.about');
})->name('about');



Route::get('/seasonal', function () {
    return view('consumer.extra.seasonal');
})->name('seasonal');
Route::get('/deliveryinfo', function () {
    return view('consumer.extra.deliveryinfo');
})->name('deliveryinfo');

Route::get('/faq', function () {
    return view('consumer.extra.faq');
})->name('faq');

Route::get('/loyaltyprogram', function () {
    return view('consumer.extra.loyaltyprogram');
})->name('loyaltyprogram');

Route::get('/paymentsecurity', function () {
    return view('consumer.extra.paymentsecurity');
})->name('paymentsecurity');

Route::get('/referfriends', function () {
    return view('consumer.extra.referfriends');
})->name('referfriends');

Route::get('/returnaproduct', function () {
    return view('consumer.extra.returnaproduct');
})->name('returnaproduct');

Route::get('/sustainability', function () {
    return view('consumer.extra.sustainability');
})->name('sustainability');

Route::get('/privacypolicy', function () {
    return view('consumer.extra.privacypolicy');
})->name('privacypolicy');

Route::get('/termsandcondition', function () {
    return view('consumer.extra.termsandcondition');
})->name('termsandcondition');


Route::get('/admin', function () {
    return view('admin.login');
})->name('admin-login');


Route::get('/admin/dashboard', function () {
    return view('admin.overview');
})->name('admin-overview');


Route::prefix('admin')->group(function () {

    Route::get('/products', [AdminProductController::class, 'index'])->name('products-management');
    Route::patch('/products/{id}/toggle-activity', [AdminProductController::class, 'toggleActivity'])->name('products.toggleStatus');
    Route::delete('/products/{id}/delete', [AdminProductController::class, 'delete'])->name('products.delete');

    Route::get('/farmers', [AdminSellerController::class, 'index'])->name('sellers-management');
    Route::put('/farmers/{id}/update', [AdminSellerController::class, 'update'])->name('sellers.update');
    Route::delete('/farmers/{id}/delete', [AdminSellerController::class, 'delete'])->name('sellers.delete');

    Route::get('/customers', [AdminCustomerController::class, 'index'])->name('customers-management');
    Route::put('/customers/{id}/update', [AdminCustomerController::class, 'update'])->name('customers.update');

    Route::get('/discounts', [AdminDiscountController::class, 'index'])->name('discounts-management');
    Route::post('/discounts', [AdminDiscountController::class, 'store'])->name('discounts.store');
    Route::put('/discounts/{discount}', [AdminDiscountController::class, 'update'])->name('discounts.update');
    Route::delete('/discounts/{discount}', [AdminDiscountController::class, 'destroy'])->name('discounts.delete');

    Route::get('/support', [SupportTicketController::class, 'index'])->name('support-management');
    Route::get('/support/{ticket_id}', [SupportTicketController::class, 'show'])->name('support.show');
    Route::post('/support/{ticket_id}/reply', [SupportTicketController::class, 'reply'])->name('support.reply');
    Route::post('/support/{ticket_id}/resolve', [SupportTicketController::class, 'resolve'])->name('support.resolve');

});



Route::get('/admin/orders', function () {
    return view('admin.orders_management');
})->name('orders-management');

Route::get('/admin/analytics', function () {
    return view('admin.analytics');
})->name('analytics-dashboard');

Route::get('/admin/settings', function () {
    return view('admin.settings');
})->name('settings');





Route::get('/sellerregister', [SellerAuthController::class, 'showForm']);
Route::post('/sellerregister', [SellerAuthController::class, 'register']);
Route::get('/seller/login', [SellerAuthController::class, 'showForm'])->name('seller_auth');
Route::post('/seller/login', [SellerAuthController::class, 'login']);
Route::post('/seller/logout', [SellerAuthController::class, 'logout'])->name('seller_logout');




use App\Http\Controllers\Seller\SellerDashboardController;

Route::prefix('seller')->name('seller.')->middleware([AuthSeller::class])->group(function () {

    // Seller Dashboard
    Route::get('/', [SellerDashboardController::class, 'index'])->name('dashboard');

    Route::get('/allProducts', [SellerDashboardController::class, 'showAllProducts'])->name('allProducts');

    // Seller Product Resource
    Route::resource('products', SellerProductController::class);

    Route::get('/index', [SellerProductController::class, 'index']);

    // Profile or other routes
    Route::get('/profile', [SellerAuthController::class, 'showProfile'])->name('profile');
});
Route::get('/seller/profile', [SellerAuthController::class, 'showProfile'])->name('sellerProfile');
// Route::middleware([AuthSeller::class])->group(function () {
//     Route::get('/products/create', [SellerProductController::class, 'create'])->name('seller.products.create');
//     Route::post('/products', [SellerProductController::class, 'store'])->name('seller.products.store');
// });
Route::middleware(['auth:seller'])->prefix('seller')->name('seller.')->group(function () {
    Route::resource('products', SellerProductController::class);
});

Route::get('/seller/dashboard', function () {
    return view('seller.dashboard.sellerdashboard');
})->name('seller-overview');