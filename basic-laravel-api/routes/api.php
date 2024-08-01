<?php

use App\Http\Controllers\Api\V1\InvoiceController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'],
    function () {
        Route::apiResource('users', UserController::class);
        Route::apiResource('invoices', InvoiceController::class);

        Route::post('invoices/bulk', ['uses' => 'InvoiceController@bulkStore']);
    }
);
