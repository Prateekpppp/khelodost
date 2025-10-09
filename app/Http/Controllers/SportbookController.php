<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Events\EventNotification;

class SportbookController extends Controller
{
    //

    public function getSportFixture(Request $request){
        $sportData = Cache::remember($request->sportname, 60, function () {
            $client = new Client(); 
            $response = $client->get("https://marketsarket.qnsports.live/get".$request->sportname."matches2"); 
            $body = $response->getBody(); 
            // $body = $response->getBody()->getContents(); 
            $data = json_decode($response->getBody(), true);
            return $data;
            // return User::where('active', 1)->get();
        });

        return $sportData;
    }
}
