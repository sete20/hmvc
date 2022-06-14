<?php

namespace Customers\Http\Controllers\backend;


use Illuminate\Routing\Controller as BaseController;

class CustomersController extends BaseController
{
    public function index()
    {
        return view('customers.views::dashboard.index');
    }
}
