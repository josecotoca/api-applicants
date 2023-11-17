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

Route::group(['prefix' => 'v1'], function () use ($router) {
    $router->post('login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('apiLogin');
    $router->post('lead', [App\Http\Controllers\Api\ApplicantController::class, 'store'])->name('apiCreateApplicant')->middleware(['jwt.verify','permission:'.App\Models\User::PERMISSION_CREATE_AGENT]);
    $router->get('lead/{id}', [App\Http\Controllers\Api\ApplicantController::class, 'show'])->name('apiGetApplicantById')->middleware(['jwt.verify','permission:'.App\Models\User::PERMISSION_GET_AGENTS]);
    $router->get('leads', [App\Http\Controllers\Api\ApplicantController::class, 'showLeads'])->name('apiGetApplicantsAll')->middleware(['jwt.verify','permission:'.App\Models\User::PERMISSION_GET_AGENTS.'|'.App\Models\User::PERMISSION_GET_AGENTS_BY_OWNER]);
});
