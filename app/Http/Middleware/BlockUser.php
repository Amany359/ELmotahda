<?php

namespace App\Http\Middleware;

use App\Http\Traits\CleanInput;
use App\Models\BlockUser as ModelsBlockUser;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlockUser
{
    use CleanInput ; 
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $_SERVER['REMOTE_ADDR'] ;
        $email = $this->InsertInput("email", $request->email);

        if(ModelsBlockUser::where("ip_device", $ip)->exists() != true ){
            if(ModelsBlockUser::where("email", $email)->exists() != true){
                return $next($request);
            }else{
                throw new NotFoundHttpException() ; 
            }
        }else{
            throw new NotFoundHttpException() ; 
        }
        
    }
}
