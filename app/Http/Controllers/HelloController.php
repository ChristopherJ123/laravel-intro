<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $r)
    {
        $display = "Hello Controller!<br>Parameter 1 : " . $r->param1 . "<br>";
        if (isset($r->param2))
            $display .= "Parameter 2 : " . $r->param2;
        return $display;
    }
}
