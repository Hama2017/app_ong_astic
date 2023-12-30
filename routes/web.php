<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\InspectionAcademyController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EtablissementScolaireController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::resource('regions', RegionController::class);
Route::resource('inspection_academies', InspectionAcademyController::class);
Route::resource('departements', DepartementController::class);
Route::resource('etablissement_scolaires', EtablissementScolaireController::class);

