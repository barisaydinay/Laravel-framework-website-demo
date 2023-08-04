<?php

namespace App\Http\Controllers;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;

class Askplus extends Controller
{
    public function ai($question) {
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'Which digital streaming platform provides '. $question . '?',
            'max_tokens' => 200,
            'temperature' => 0,
            'n' => 2,
    
    
        ]);
        print_r($result['choices'][0]['text']);
    }
}
