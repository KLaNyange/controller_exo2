<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\SavController;
use App\Http\Controllers\WelcomeController;
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
//route welcome
Route::get("/", [WelcomeController::class, "welcome"])->name("home");

//route noous contacter
Route::get("/infos/contact/sav", [SavController::class, "sav"])->name("sav");

Route::get("/infos/contact/partenariat", [PartnershipController::class, "partnership"])->name("partenariat");

Route::get("/infos/contact/info", [InfoController::class, "info"])->name("info");

//route equipe
Route::get("/team/web/dev/frontend",[FrontController::class, "front"])->name("frontEnd");

Route::get("/team/web/dev/backend", [BackController::class, "back"])->name("backEnd");
