<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Customer extends Controller
{
    //
    function index()
    {
        // echo "api call will be here ";

        return Http::get("http://dummy.restapiexample.com/api/v1/employees");
    }
}
