<?php
use Illuminate\Http\Request;
use App\Models\Transmisstion;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\FuelTypeController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\EmisstionController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\TransmisstionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/cars',CarController::class);
Route::apiResource('/brands',BrandsController::class);
Route::apiResource('/car-models',CarModelController::class);
Route::apiResource('/car-transmisstion',TransmisstionController::class);
Route::apiResource('/car-equipments',EquipmentController::class);
Route::apiResource('/car-countries',CountryController::class);
Route::apiResource('/car-sellers',SellerController::class);
Route::apiResource('/car-emissions',EmisstionController::class);
Route::apiResource('/cars-api',BrandController::class);
Route::apiResource('/fuels',FuelTypeController::class);
