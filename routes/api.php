<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;

Route::post('login', [ApiController::class, 'authenticate'])->name('api.login');
Route::post('register', [ApiController::class, 'register'])->name('api.register');

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('logout', [ApiController::class, 'logout'])->name('api.logout');
    Route::get('get_user', [ApiController::class, 'get_user'])->name('api.getUser');

    Route::get('get_users', [App\Http\Controllers\Users\GetUsersController::class, 'get'])->name('api.getUsers');

    Route::group(['middleware' => ['jwt.is_admin']], function () {
        Route::get('get_user_by_id', [App\Http\Controllers\Users\GetUserByIdController::class, 'get'])->name('api.getUserById');
        Route::post('edit_user', [App\Http\Controllers\Users\EditUserController::class, 'edit'])->name('api.editUser');
    });



    // Route::get('products/{id}', [ProductController::class, 'show']);
    // Route::post('create', [ProductController::class, 'store']);
    // Route::put('update/{product}',  [ProductController::class, 'update']);
    // Route::delete('delete/{product}',  [ProductController::class, 'destroy']);
});
