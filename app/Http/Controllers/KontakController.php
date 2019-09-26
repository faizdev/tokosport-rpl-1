<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        // ini saya rubah
        return view('form-kontak');
    }
}
