<?php

namespace App\Http\Middleware;

use App\Models\analysis as ModelsAnalysis;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class Analysis
{
    
    
    public function handle(Request $request, Closure $next): Response
    {

        try {
            //code...
            $page = Route::currentRouteName() ; 
            $ip = $_SERVER['REMOTE_ADDR'] ;
            $check = ModelsAnalysis::orderBy('id', 'desc')->where("ip_device", $ip)->where("page", $page)->first();
            
            if(!$check){
                ModelsAnalysis::create([
                    "ip_device" => $ip, 
                    "page" => $page
                ]);
            }else{
                $today = date('Y-m-d') ;
                if($today > $check->created_at){
                    ModelsAnalysis::create([
                        "ip_device" => $ip, 
                        "page" => $page
                    ]);
                }
            }
            
        } catch (\Throwable $th) {
            //throw $th;
        }

        return $next($request);

    }
}



