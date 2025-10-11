<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Pusher\Pusher;
use GuzzleHttp\Client;
use App\Events\EventNotification;

class getSportFixture extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-sport-fixture {sportname}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $sportname = $this->argument('sportname');
        // $sportData = Cache::remember($sportname, 1, function () use($sportname) {
            // $sportname = $this->argument('sportname');
            $client = new Client(); 
            $response = $client->get("https://marketsarket.qnsports.live/get".$sportname."matches2"); 
            $body = $response->getBody(); 
            $body = $response->getBody()->getContents(); 
            // event(new EventNotification($body));
            // return $body;
        // });

        $options = [
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true
        ];

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        // $body = Storage::get('sports/'.$sportname.'.json');
        
        $body = json_decode($body,true);
        $body = array_chunk($body,15);
        $sportInplayDataArray = [];
        $sportUpcomingDataArray = [];
        
        foreach ($body as $chunk) {
            foreach ($chunk as $item) {
                if($item['marketId']){
                    
                    $date = explode(' / ',$item['eventName'])[1];
                    
                    if(strtotime(now()) > strtotime($date) && $item['inPlay']=="True"){
                        $sportInplayDataArray[] = $item;
                    } else if(strtotime(now()) < strtotime($date)){
                        $sportUpcomingDataArray[] = $item;
                    }
                };
            }
        }

        $sportInplayDataArray = array_slice($sportInplayDataArray, 0, 2);
        $sportUpcomingDataArray = array_slice($sportUpcomingDataArray, 0, 5);

        $body = array_merge($sportInplayDataArray,$sportUpcomingDataArray);
        $body = json_encode($body);
        $sportInplayDataArray = json_encode($sportInplayDataArray);
        $sportUpcomingDataArray = json_encode($sportUpcomingDataArray);
        Storage::put('sports/inplay/'.$sportname.'.json', $sportInplayDataArray);
        Storage::put('sports/upcoming/'.$sportname.'.json', $sportUpcomingDataArray);

        $response = $pusher->trigger('sportsupdate', 'sportsupdate-event', ['data' => $body,'sport'=>$sportname]);
            

            // return json_decode($response->getBody(), true);
            
            // return User::where('active', 1)->get();
    }
}
