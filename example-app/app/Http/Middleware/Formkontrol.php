<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Formkontrol
{
   
    public function handle(Request $request, Closure $next): Response
    {
        if($request->metin == "elma") {
            return redirect()->back();
        }
        return $next($request);
    }
}
