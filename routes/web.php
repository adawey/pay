<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\NotificationsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');


Route::get('/addbalance', [PaymentController::class, 'AddBalancePage'])->name('AddBalancePage');
Route::post('/addbalance-store', [PaymentController::class, 'verifyPay'])->name('balance.verifyPay');
Route::post('/addbalance-confirm', [PaymentController::class, 'confirmBalance'])->name('balance.confirmBalance');
Route::get('/sendMony', [PaymentController::class, 'sendMonyPage'])->name('sendMonyPage');
Route::post('/sendMony-store', [PaymentController::class, 'sendMonyCode'])->name('sendMony.verifyPay');
Route::post('/sendMony-confirm', [PaymentController::class, 'sendMonyConfirm'])->name('sendMony.confirm');




Route::patch('/fcm-token', [HomeController::class, 'updateToken'])->name('fcmToken');


Route::get('/Send-report', [ReportsController::class, 'reportPage'])->name('reportPage');
Route::post('/save-report', [ReportsController::class, 'storeReport'])->name('storeReport');
Route::get('/MyPayments', [UserController::class, 'myPayment'])->name('myPayment');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');



Route::post('/send-notification', [HomeController::class, 'notification'])->name('notification');
Route::get('/adawe', [NotificationsController::class, 'sendNotification'])->name('sendNotification');
