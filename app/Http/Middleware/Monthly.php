<?php

namespace App\Http\Middleware;

use App\Models\analysis;
use App\Models\Monthly as ModelsMonthly;
use App\Models\order;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Monthly
{
 
    
    public function handle(Request $request, Closure $next): Response
    {


        $check = ModelsMonthly::orderBy('id', 'desc')->first();


        if($check){
            $curent_month = date('m') ;
            $curent_year = date('Y') ;
            $last_year = substr($check->date, 0, 4) ; 
            $last_month = substr($check->date, -5, 2) ; 


            // new month
            if($curent_year > $last_year || $curent_month > $last_month){


                // total orders
                $orders = order::orderBy('order_token', 'desc')->where("created_at", "LIKE", "$last_year-$last_month%")->where("process", "4")->get();

                // all visitor
                $visitors = analysis::where("created_at", "LIKE", "$last_year-$last_month%")->get();
                
                // get total of month
                $total = 0 ; 
                foreach ($orders as $order) {
                    $total += ( $order->product_price * $order->order_quantity  ) ; 
                }


                // set last month 
                ModelsMonthly::where("date", "LIKE", "$last_year-$last_month%")->update([
                    "total" => $total, 
                    "orders" => count($orders), 
                    "visitors" => count($visitors)
                ]);

                // create new month
                ModelsMonthly::create([
                    "total" => 0.00 , 
                ]);
                
                

            }


        }else{
            ModelsMonthly::create([
                "total" => 0.00
            ]);
        }
            




        return $next($request);
    }
}
