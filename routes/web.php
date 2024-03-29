<?php

use App\Http\Controllers\CheckInCheckOutController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HousekeepingController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomServiceController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;







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


// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

    Route::get('/', function () {
        return view('dashboard.index'); // Assuming your HTML code is saved in the welcome.blade.php file
    });



Route::resource('/dashboard', DashboardController::class);
Route::resource('/rooms', RoomController::class);
Route::resource('/inventories', InventoryController::class);
Route::resource('/events', EventController::class);
Route::resource('/housekeepings', HousekeepingController::class);
Route::resource('/checks', CheckInCheckOutController::class);
Route::resource('/bills', BillingController::class);
Route::resource('/services', RoomServiceController::class);
Route::resource('/guests', guestController::class);
Route::resource('/reservation', reservationController::class);
Route::resource('/staff', staffController::class);

Route::get('/search-allvehicles', [AllvehicleController::class, 'search'])->name('search.allvehicles');


Route::view('/vehicles/home','home');
// Route::get('/allvehicles/index', [AllvehicleController::class, 'search']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard/index2', 'DashboardController@index2')->name('dashboard.index2');

Route::get('/connection',function(){

    try {
        DB::connection()->getPdo();
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }

});
