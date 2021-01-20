<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function testRequest(Request $req)
    {
        // echo "Form Submitted";
        return $req->input();
    }
}
