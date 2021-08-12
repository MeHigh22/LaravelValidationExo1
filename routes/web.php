<?php

use App\Http\Controllers\LivreController;
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

Route::get("/", [LivreController::class, "index"]);

Route::get("/create", [LivreController::class, "create"]);

Route::post("/livres", [LivreController::class, "store"]);

Route::delete("livre/{id}/delete", [LivreController::class, "destroy"]);

Route::get("livre/{id}/show", [LivreController::class, "show"]);

Route::get("livre/{id}/edit", [LivreController::class, "edit"]);

Route::put("livre/{id}/update", [LivreController::class, "update"]);


