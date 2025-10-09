<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
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
        $sportData = Cache::remember($sportname, 1, function () use($sportname) {
            $sportname = $this->argument('sportname');
            $client = new Client(); 
            $response = $client->get("https://marketsarket.qnsports.live/get".$sportname."matches2"); 
            $body = $response->getBody(); 
            $body = $response->getBody()->getContents(); 
            Storage::put('sports/'.$sportname.'.json', $body);
            // event(new EventNotification($body));
            // return $body;
        });

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

        $body = Storage::get('sports/'.$sportname.'.json');
        $body = json_decode($body,true);
        $body = array_slice($body, 0, 5);
        $body = json_encode($body);

        $response = $pusher->trigger('sportsupdate', 'sportsupdate-event', ['data' => $body]);
            

            // return json_decode($response->getBody(), true);
            
            // return User::where('active', 1)->get();
    }
}
