<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('auth/login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('apiToken');
Route::post('auth/refresh', [App\Http\Controllers\Api\AuthController::class, 'refresh'])->name('apiTokenRefresh')->middleware(['jwt.verify']);
Route::post('auth/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->name('apiTokenRefresh')->middleware(['jwt.verify']);
Route::get('auth/me', [App\Http\Controllers\Api\AuthController::class, 'me'])->name('me')->middleware(['jwt.verify']);
Route::get('auth/reconection', [App\Http\Controllers\Api\SettingsController::class, 'reconection'])->name('apiTokenReconection')->middleware(['jwt.verify']);

$router->group(['prefix' => 'industry','middleware' => ["jwt.verify","role:".App\Models\User::ROLE_INDUSTRY]], function () use ($router) {
    $router->get('settings', [App\Http\Controllers\Api\IndustryController::class, 'settings']);
    $router->post('import-xls', [App\Http\Controllers\Api\IndustryController::class, 'importXls']);
    $router->post('save-acopio', [App\Http\Controllers\Api\IndustryController::class, 'saveAcopio']);
});
