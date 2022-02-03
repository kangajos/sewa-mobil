<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterMobilController;
use App\Http\Controllers\SewaMobilController;
use App\Models\SewaMobil;
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
//     return view('welcome');
// });

# handle authenticate
Route::prefix("/auth")->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login.index');
    Route::post('/', [AuthController::class, 'login'])->name('login.post');
    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
});

Route::prefix("/")->middleware("admin")->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix("sewa-mobil")->group(function () {
        Route::get("/", [SewaMobilController::class, "index"])->name("sewa_mobil.index");
        Route::get("/list", [SewaMobilController::class, "index"])->name("list_sewa.index");
        Route::post("/", [SewaMobilController::class, "store"])->name("sewa_mobil.store");
    });
    Route::prefix("master-mobil")->group(function () {
        Route::get("/", [MasterMobilController::class, "index"])->name("master_mobil.index");
        Route::get("/create", [MasterMobilController::class, "create"])->name("master_mobil.create");
        Route::post("/", [MasterMobilController::class, "store"])->name("master_mobil.store");
        Route::get("/{id}/edit", [MasterMobilController::class, "edit"])->name("master_mobil.edit");
        Route::put("/{id}", [MasterMobilController::class, "update"])->name("master_mobil.update");
        Route::delete("/{id}", [MasterMobilController::class, "destroy"])->name("master_mobil.destroy");
    });
});
