<?php

use App\Models\Meal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\MealOrderController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ExportReportController;
use App\Http\Controllers\FcmController;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

Route::get('fcm', [FcmController::class, 'index']);
Route::get('store', [FcmController::class, 'sendNotification']);
Route::get('privecy', function () {
    return view('pages.privecypolicy');
});
Route::get('edit', [UserController::class, 'show'])->name('edit');
Route::get('c', [CurrencyController::class, 'index']);
Route::post('c/{alia}', [CurrencyController::class, 'exchangeCurrency']);

Route::get('alia', function () {
    return QrCode::color(250, 0, 0)
        ->generate('codingdriver.com');
});;
