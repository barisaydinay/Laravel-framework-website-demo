<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class StasChecker extends Controller
{
    public function mostUsedCountry() { // calculating the most used country related to searches.

        $query = DB::table('bilgiler')->get(); // all rows in db returned

        $array = array();
       
      

        foreach ($query as $row) { 
            $flag = 0;
           foreach($array as &$element) {
            if($element[0] === $row->ulke) { $flag = 1; $element[1] = $element[1] + 1; }
           }

           if($flag == 0) {
            array_push($array, array($row->ulke, 1));
           }


        }

        $max = $array[0][1];
        $country_name = $array[0][0];

        foreach ($array as $element) {
            if($element[1] > $max) { $max = $element[1]; $country_name = $element[0]; }
        }

        echo "The most used country is: ".$country_name." with ".$max." searches.";

    }




}
