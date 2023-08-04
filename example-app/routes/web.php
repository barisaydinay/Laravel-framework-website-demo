<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Askplus;
use App\Http\Controllers\BardController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VeritabaniIslemleri;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StasChecker;
use App\Http\Controllers\ChartController;




/*Route::get('ask/{question}', function ($question) {

    $result = OpenAI::completions()->create([
        'model' => 'text-davinci-003',
        'prompt' => $question,
        'max_tokens' => 2000,
        'temperature' => 0,
        'n' => 2,


    ]);
    print_r($result['choices'][0]['text']);
});*/



Route::get("/askPlus/{question}",[Askplus::class,'ai']);





Route::get('/',[MoviesController::class,'index'])->name('movies.index');
//Route::get('/movies/{movie}','MoviesController@show')->name('movies.show');

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/websayfa',function() {
    return view('web');
});*/

Route::get("/phpturkiye/{isim}",[Ornek::class,'test']);

Route::get("/web",[Yonet::class,'site']) -> name('en-yukari');

Route::get("/form",[Formislemleri::class,'gorunum']) -> name('gorunum');

Route::middleware('arakontrol')->post("/formsonuc",[Formislemleri::class,'sonuc']) -> name('sonuc');

Route::get("/formyardim",[Formislemleri::class,'yardim']) -> name('yardim');


 Route::get("/searchPage",[SearchController::class,'display']) -> name('display');

 Route::post("/searchResult",[SearchController::class,'result']) -> name('result');

Route::get('/mainPage', function () {
    $var = " ";
    return view('navbar',['var' => $var]);
}) -> name('mainPage');

Route::get('/aboutUs', function () {
    return view('aboutUs');
}) -> name('aboutUs');


//Route::get("/AllEntries",[VeritabaniIslemleri::class,'listAll']);

Route::get("/AdminPage",[VeritabaniIslemleri::class,'listAll']) -> name('entries_admin');

//Route::get('/bardy', [BardController::class,'index']);

Route::get('/testit', function () {
    $str = "barbie";

    $query = DB::table('my_database_films')->get();

        foreach ($query as $row) {
            if( $row->film_series_name === $str ) {echo "esit"; }
            else { echo "not esit"; }
        }
    
});


Route::get("/stasex",[StasChecker::class,'mostUsedCountry']);

Route::get("/pie",[ChartController::class,'pieChart']) -> name('piechart');