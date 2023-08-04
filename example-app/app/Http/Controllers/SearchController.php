<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class SearchController extends Controller
{
    public function display() {
        return view('searchPage');
    }

    public function result(Request $request) {

        date_default_timezone_set('Europe/Istanbul');
        $now = Carbon::now();


        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'Which digital streaming platform  that allows its members to watch TV shows and movies provides '. $request->metin  .'in Country: '. $request->country . '?',
            'max_tokens' => 200,
            'temperature' => 0,
            'n' => 2,
        
        
        ]);

        // web site users' entries saved into database 
        DB::table("bilgiler")->insert([  
            "metin" => $result['choices'][0]['text'] ,
            "ulke" => $request->country ,
            "film_name" => $request->metin,
            "created_at" => $now


        ]);
        
        /*   -- THIS PART OF CODE IS COMMENTED SINCE THE OPENAI REQUEST IS LIMITED FROM ME --
        
        // new database table is creating regarding to users' search keywords
        $query = DB::table('my_database_films')->get();
        $flag = 0;

        foreach ($query as $row) { // checking if film or series is already exits in my database
            if( $row->film_series_name === $request->metin ) $flag = 1;
        }

        if($flag == 0) {

            $general_question = OpenAI::completions()->create([
                'model' => 'text-davinci-003',
                'prompt' => 'Who is the director of '.$request->metin.' ?'.
                ' Can you list the cast of '.$request->metin.' ?'.
                ' What is the release year of '.$request->metin.' ?',
                'max_tokens' => 200,
                'temperature' => 0,
                'n' => 2,
            ]);

            $all_cast = OpenAI::completions()->create([
                'model' => 'text-davinci-003',
                'prompt' => 'Can you list the cast of '.$request->metin.' ?',
                'max_tokens' => 200,
                'temperature' => 0,
                'n' => 2,
            ]);

            $release_year = OpenAI::completions()->create([
                'model' => 'text-davinci-003',
                'prompt' => 'What is the release year of '.$request->metin.' ?',
                'max_tokens' => 200,
                'temperature' => 0,
                'n' => 2,
            ]);



            DB::table("my_database_films")->insert([  
                "film_series_name" => $request->metin ,
                "director" => $general_question['choices'][0]['text'] ,
                "cast" => $general_question['choices'][1]['text'], //$all_cast['choices'][0]['text'] ,
                "release_year" =>  1999        //$release_year['choices'][0]['text']

            ]);


        }
        */



        
        //return view('searchResult',['search_result' => $result['choices'][0]['text']]);
        return view('navbar',['var' => $result['choices'][0]['text']]);


      }

     

}
