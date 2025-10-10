<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Pusher\Pusher;
use GuzzleHttp\Client;
use App\Events\EventNotification;

class getEventData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-event-data {sportname}';

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
        $client = new Client(); 
        if($sportname=='cricket'){
            $response = $client->get("http://170.187.250.13/getbm?eventId=".$request->eventId); 
        } else{
            $response = $client->get("http://172.232.74.157/getdata?eventId=".$request->eventId); 
        }
        $body = $response->getBody(); 
        $body = $response->getBody()->getContents(); 
        Storage::put('sports/'.$sportname.'.json', $body);

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
        $sportdataArray = [];

        foreach ($body as $chunk) {
            foreach ($chunk as $item) {
                if($item['marketId']){
                    $sportdataArray[] = $item;
                };
            }
        }

        $body = array_slice($sportdataArray, 0, 15);
        $body = json_encode($body);

        $response = $pusher->trigger('sportsupdate', 'sportsupdate-event', ['data' => $body,'sport'=>$sportname]);
          
    }
}
