<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardFacilityController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardTagController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MulitpleSignUp;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignupController;
use App\Models\Facility;
use App\Models\Order;
use App\Models\Photo;
use App\Models\Product;
use App\Models\User;
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

// Home 
Route::get('/', function () {
    return view('home', [
        "facilities" => Facility::all(),
        "photos" => Photo::all(),
        "products" => Product::all(),
        "users" => User::where('role', 'user')->take(4)->get()
    ]);
})->name('home');

// Products
Route::get('/products', function () {
    return view('products', [
        "products" => Product::all()
    ]);
});

// Friend List
Route::get('/friends', function () {
    return view('friends', [
        "users" => User::where('role', 'user')->get()
    ]);
});

// Login Page
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Google
Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);

// Sign Up Page
Route::get('/signup', [SignupController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignupController::class, 'store'])->middleware('guest');
Route::get('/signup_1', [SignupController::class, 'sign_up_1_view'])->name('sign_up_step_1_view');
Route::post('/signup_1', [SignupController::class, 'sign_up_1'])->name('sign_up_step_1');
Route::get('/signup_2', [SignupController::class, 'sign_up_2_view'])->name('sign_up_step_2_view')->middleware('auth');
Route::post('/signup_2', [SignupController::class, 'sign_up_2'])->name('sign_up_step_2')->middleware('auth');
Route::get('/signup_3', [SignupController::class, 'sign_up_3_view'])->name('sign_up_step_3_view')->middleware('auth');
Route::post('/signup_3', [SignupController::class, 'sign_up_3'])->name('sign_up_step_3')->middleware('auth');
Route::get('/signup_4', [SignupController::class, 'sign_up_4_view'])->name('sign_up_step_4_view')->middleware('auth');
Route::post('/signup_4', [SignupController::class, 'sign_up_4'])->name('sign_up_step_4')->middleware('auth');
Route::get('/upload_photo', [SignupController::class, 'upload_photo_view'])->name('upload_photo_view')->middleware('auth');
Route::post('/upload_photo', [SignupController::class, 'upload_photo'])->name('upload_photo')->middleware('auth');
Route::get('/signup_6', [SignupController::class, 'sign_up_5_view'])->name('sign_up_step_5_view')->middleware('auth');

// Detail Product
Route::get('/product/{id}', [ProductController::class, 'show']);

// Checkout 
Route::resource("/checkout", OrdersController::class);

// User Dashboard
Route::get('/my-dashboard', function () {
    return view("userDashboard.index");
})->middleware('can:isUser');

// User Dashboard Orders
Route::get('/my-dashboard/orders', function () {
    return view("userDashboard.myOrder.index", [
        'orders' => Order::where('user_id', auth()->user()->id)->orderBy('bookdate', 'desc')->get()
    ]);
})->name('myDashboard.orders')->middleware('can:isUser');

// User Dashboard Chat
Route::get('/my-dashboard/friends', function () {
    return view("userDashboard.myFriend.index");
})->middleware('can:isUser');


// ================================================ Admin ========================================

// Login Admin
Route::get('/super', [AdminDashboardController::class, 'login_view'])->middleware('guest');
Route::post('/super', [AdminDashboardController::class, 'authenticate'])->middleware('guest');

// Dashboard
Route::get("/admin/dashboard", [AdminDashboardController::class, 'index'])->name('dashboard')->middleware('can:isAdmin');

// Dashboard Product
Route::resource("/admin/dashboard/products", DashboardProductController::class)->middleware('can:isAdmin');

// Dashboard Facilities
Route::resource("/admin/dashboard/facilities", DashboardFacilityController::class)->middleware('can:isAdmin');

// Dashboard Galery
Route::resource("/admin/dashboard/photos", PhotoController::class)->middleware('can:isAdmin');

// Dashboard Tag
Route::resource("/admin/dashboard/tags", DashboardTagController::class)->middleware('can:isAdmin');
