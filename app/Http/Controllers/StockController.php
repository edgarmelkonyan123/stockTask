<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function __invoke(Request $request) {
        $content = @file_get_contents("http://phisix-api3.appspot.com/stocks.json");
        if($request->ajax()){
            return $content;
        }
        $json = json_decode($content, true);
        return view("welcome")
            ->with("stocks",$json["stock"]);
    }
}
