<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ornek extends Controller
{
    function test($isim) {
        return view('baris',['ad' => $isim]);
    }
}
