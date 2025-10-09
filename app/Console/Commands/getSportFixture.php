<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;
use App\Events\EventNotification;

class getSportFixture extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-sport-fixture';

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
        // $sportData = Cache::remember($sportname, 1, function () use ($sportname) {
            $client = new Client(); 
            $response = $client->get("https://marketsarket.qnsports.live/get".$sportname."matches2"); 
            $body = $response->getBody(); 
            // $body = $response->getBody()->getContents(); 
            Storage::put('sports/'.$sportname.'.json', $body);
            event(new EventNotification($body));

            // return json_decode($response->getBody(), true);
            
            // return User::where('active', 1)->get();
        // });
    }
}
