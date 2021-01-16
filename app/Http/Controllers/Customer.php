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

        $data=Http::get("http://reqres.in/api/Users?page=1");
        return view('customer',['collection'=>$data['data']]);
        
    }
}
