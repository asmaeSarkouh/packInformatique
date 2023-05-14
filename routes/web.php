<?php

use App\Http\Controllers\Admin\DirecteurAdminController;
use App\Http\Controllers\Admin\EtablisementAdminController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\MaterialAdminController;
use App\Http\Controllers\Admin\TypeAdminController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Page\ChartController;
use App\Http\Controllers\Page\EtablisementController;
use App\Http\Controllers\Page\MaterialController;
use App\Http\Controllers\Page\RapportController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::view('/', 'welcome')->name('home');
Route::get('/',[ChartController::class,'index'])->name('home');
Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});

Route::middleware('admin')->group(function () {
Route::resource('admin/users',UserAdminController::class);
Route::resource('admin/etablisements',EtablisementAdminController::class);
Route::resource('admin/materials',MaterialAdminController::class);
Route::resource('admin/types',TypeAdminController::class);
Route::get('admin',[HomeAdminController::class,'index']);
});


Route::resource('materials',MaterialController::class);
Route::resource('etablisements',EtablisementController::class);
Route::get('rapport',[RapportController::class,'index']);
Route::get('/rapport/{id}', [RapportController::class, 'downloadPDF']);
Route::get('chart', [ChartController::class,'index']);
Auth::routes();

