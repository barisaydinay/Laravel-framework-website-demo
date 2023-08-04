<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site() {
        $data["yazi1"] = "PHP Turkiye"; 
        $data["yazi2"] = "Web sitemize hos geldiniz";
        $data["yazi3"] = "Hizmetlerimiz";
        $data["yazi4"] = "Web tasarim ve yazilim hizmetleri";
        $data["yazi5"] = "Bize ulasin";
        return view('web',$data);
    }
}
