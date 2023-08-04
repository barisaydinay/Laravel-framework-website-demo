<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formislemleri extends Controller
{
    public function gorunum() {
        return view('form');
    }

    public function sonuc(Request $request) {
      //return $request->metin;
      return view('formsonuc',['user_text' => $request->metin]);
      
    }

    public function yardim() {
        return view('formyardim');
    }

   


}
