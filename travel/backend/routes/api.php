<?php

use App\Http\Controllers\API\DestinationController;
use App\Http\Controllers\API\HotelController;
use App\Http\Controllers\API\PackageController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\RestaurantController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\TransportationController;
use App\Http\Controllers\API\TripController;
use App\Http\Controllers\API\UserController;

use App\Http\Controllers\jwtAuthController;



use App\Http\Controllers\RoleController;
use App\Http\Controllers\TripDestinationController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;


Route::post('/register',[jwtAuthController::class,'register']);
Route::post('/login',[jwtAuthController::class,'login']);
Route::get('/roles',[RoleController::class,'index']);
Route::middleware("auth:api")->group(function(){

    Route::get('getUser',[jwtAuthController::class,'getUser']);
    Route::post('logout',[jwtAuthController::class,'logout']);
});

Route::get('hotels/{id}/average-ratings', [HotelController::class, 'getHotelAverageRatings']);

Route::get('tripDestinations/{tripId}', [TripDestinationController::class, 'getTripDestinations']);

Route::get('hotels/{id}/ratings', [HotelController::class, 'allHotelRatings']);

Route::apiResource('users', UserController::class);

Route::apiResource('trips', TripController::class);

Route::get('trips/users/{id}', [TripController::class, 'getTripByUserId']);

Route::apiResource('tripDestinations', TripDestinationController::class);

Route::apiResource('hotels', HotelController::class);

Route::apiResource('restaurants', RestaurantController::class);

Route::apiResource('packages', PackageController::class);

Route::apiResource('reviews', ReviewController::class);

Route::apiResource('destinations', DestinationController::class);

Route::apiResource('payments', PaymentController::class);

Route::apiResource('transportations', TransportationController::class);

