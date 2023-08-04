<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BardController extends Controller
{
    public function index()
    {   
        $client = new Client();
        $response = $client->get('https://bard.ai/api?query=what is the capital of France?');
        $body = $response->getBody();
        $data = json_decode($body, true);
        
        echo json_encode($data);
        
    }
}