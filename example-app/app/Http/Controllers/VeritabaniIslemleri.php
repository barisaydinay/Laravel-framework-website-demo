<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VeritabaniIslemleri extends Controller
{
    public function ekle() {
        date_default_timezone_set('Europe/Istanbul');
        $now = Carbon::now();

        DB::table("bilgiler")->insert([
            "metin" => "GPT_RESPONSE" ,
            "ulke" => "Germany" ,
            "film_name" => "Oppenhaimer",
            "created_at" => $now


        ]);
    }



    public function listAll() {
        $veriler=DB::table("bilgiler")->get();
        
        foreach($veriler as $key => $bilgi) {
            echo '<span style="color: red;">ENTRY_ID: </span>'.$bilgi->id.
            '<span style="color: red;"> FILM_NAME: </span>'.$bilgi->film_name.
            '<span style="color: red;"> COUNTRY: </span>'.$bilgi->ulke.
            '<span style="color: red;"> GPT_RESPONSE: </span>'.$bilgi->metin.
            '<span style="color: red;"> SEARCHED_AT: </span>'.$bilgi->created_at ;
            echo "<br> <br>" ;
        }
    }
}
