<?php
use App\Http\Controllers\authController;
use App\Http\Controllers\sensorController;
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

// Route::get('/', function () {
//     return view('main.home', ['title' => 'home']);
// });
route::group(['middleware' => ['auth']], function () {
    Route::get('/', [sensorController::class, 'index']);
});
Route::post('/logout', [authController::class, 'logout']);
route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [authController::class, 'login'])->name('login');
    Route::post('/login', [authController::class, 'authlogin']);
});

// route::get('tgl', [sensorController::class, 'tgl']);
