<?php

// use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
 use App\Http\Controllers\WelcomeController;
 use App\Http\Controllers\Auth\LoginController;
 use App\Http\Controllers\ReservationController;
 use App\Http\Controllers\TableController;
 use App\Http\Controllers\FoodController;
 use App\Http\Controllers\WaitlistController;
 use App\Http\Controllers\PaymentController;
 use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomerReservation;
// use App\Http\Controllers\RoomController;
// use App\Http\Controllers\CheckInandCheckOutController;
// use App\Http\Controllers\PaymentController;
// use App\Http\Controllers\FeedbackController;
// use App\Http\Controllers\EventBookingController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\GuestBookingController;
// use App\Http\Controllers\FeedbackSendContrllor;
// use App\Http\Controllers\AvilableCheckController;

// use App\Models\Booking;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */
Route::get('/',[App\Http\Controllers\WelcomeController::class, 'index']);
Route::get('/home',[App\Http\Controllers\HomeController::class, 'index']);



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::put('/guest', [App\Http\Controllers\GuestBookingController::class, 'create'])->name('guest');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'product' => ProductController::class,
    'table' => TableController::class,
    'payment'=> PaymentController::class,
    'food'=> FoodController::class,
    'waitlist'=> WaitlistController::class,
    'reservation'=> ReservationController::class,
    // 'payment'=> PaymentController::class,
    // 'feedback'=> FeedbackController::class,
    // 'feedbacksend'=> FeedbackSendContrllor::class,

    // 'guest'=>GuestBookingController::class,
    'dashboard'=> DashboardController::class,
    'cutomer'=> CustomerReservation::class,

]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');