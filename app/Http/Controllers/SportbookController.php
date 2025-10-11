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
        $sportname = $request->sportname;
        $sportData = Cache::remember($sportname, 60, function () use ($sportname) {
            $client = new Client(); 
            $response = $client->get("https://marketsarket.qnsports.live/get".$sportname."matches2"); 
            $body = $response->getBody(); 
            // $body = $response->getBody()->getContents(); 
            // event(new EventNotification($sportData));
            return json_decode($response->getBody(), true);
            
            // return User::where('active', 1)->get();
        });

        return $sportData;
    }

    public function getCricketEventData(Request $request){
        $sportname = $request->sportname;
        $sportData = Cache::remember($sportname, 60, function () use ($sportname) {
            $client = new Client(); 
            $response = $client->get("http://170.187.250.13/getbm?eventId=".$request->eventId); 
            $body = $response->getBody(); 
            // $body = $response->getBody()->getContents(); 
            // event(new EventNotification($sportData));
            return json_decode($response->getBody(), true);
            
            // return User::where('active', 1)->get();
        });

        return $sportData;
    }

    public function eventPage(Request $request){
        // $body = Storage::get('event/'.$request->eventId.'.json');
        // $body = json_decode($body);
        $eventId = $request->eventId;
        return view('pages.eventPage',compact('eventId'));
    }

    public function eventData(Request $request){
        // $body = Storage::get('event/'.$request->eventId.'.json');
        $client = new Client(); 
        $response = $client->get("http://170.187.250.13/getbm?eventId=".$request->eventId); 
        $body = $response->getBody(); 
        $body = $response->getBody()->getContents(); 
        dd($body);
        return response()->json([
            'response'=>$body,
            'code'=>'200'
        ]);
    }
}
