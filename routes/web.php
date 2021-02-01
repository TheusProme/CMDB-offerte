<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FileController;

// products/home/page routs //
Route::get('/',[PageController::class, 'index'])->name('home');
Route::get('/products/list', [ProductController::class, 'productList'])->name('products.list');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::resource('products', ProductController::class);
Route::get('/page/index', [PageController::class, 'indexPage'])->name('page.index');
Route::get('/page/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
Route::post('/update/{id}', [PageController::class, 'update'])->name('update');

// file upload//
Route::post('/products/edit/{id}',[FileController::class, 'store'])->name('file.store');

// Jetstreamrouts //
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

// order routes //
Route::middleware(['auth:sanctum', 'verified'])->get('/account/orders', function () {
    return Inertia\Inertia::render('Orders');
})->name('orders');
Route::get('/logout', [PageController::class, 'indexlogout'])->name('logout');

// order routes //
Route::middleware(['auth:sanctum', 'verified'])->get('/account/orders', function () {
    return Inertia\Inertia::render('Orders');
})->name('orders');

// shoping cart routes //
Route::get('/add-to-cart/{id}', [ProductController::class, 'getAddToCart'])->name('addToCart');
Route::get('/shopping-cart', [ProductController::class, 'getCart'])->name('shoppingCart');
Route::get('/reduce/{id}', [ProductController::class, 'getReduceByOne'])->name('reduce');
Route::get('/increase/{id}', [ProductController::class, 'getIncreaseByOne'])->name('increase');
Route::get('/remove/{id}', [ProductController::class, 'getRemoveItem'])->name('remove');

//Route::get('/shopping-cart', function(){return view('shopping-cart');})->name('shopping-cart');
Route::get('/shopping-cart/getCheckout', [OrderController::class, 'getCheckout'])->name('checkout');
Route::post('/shopping-cart/postCheckout', [OrderController::class, 'postCheckout'])->name('postCheckout');

// mail server rout//
Route::get('/send-mail', function () {   
    $mailDetails = [
        'Name' => $_GET['Name'],
        'Email' => $_GET['Email'],
        'Subject' => $_GET['Subject'],
        'Comment' => $_GET['Comment']
    ];
    Mail::to('68d4e26934-204aa0@inbox.mailtrap.io')->send(new \App\Mail\NewUserNotification($mailDetails));

    return redirect()->back();
});
