<?php

use Illuminate\Support\Facades\Route;
use Customers\Http\Controllers\backend\CustomersController;

// route::prefix(config('customerPrefixes.prefix.backend'), function () {
route::group(['prefix' => config('customers.prefix.backend')], function () {

    route::get('/', [CustomersController::class, "index"]);
});
// });
