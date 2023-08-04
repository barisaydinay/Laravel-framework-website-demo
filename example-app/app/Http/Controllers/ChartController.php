<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChartController extends Controller
{
    public function pieChart() {
        $result = DB::select("SELECT ulke, COUNT(*) AS film_count FROM bilgiler GROUP BY ulke");
        
        $data = " ";
        foreach($result as $val) {
            $data .="['".$val->ulke."', ".$val->film_count."],";
        }
        $chartData = $data;
        return view('pie', compact('chartData'));
    }
}
