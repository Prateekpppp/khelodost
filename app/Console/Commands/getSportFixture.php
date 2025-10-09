<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        $sportData = Cache::remember($sportname, 60, function () use ($sportname) {
            $client = new Client(); 
            $response = $client->get("https://marketsarket.qnsports.live/get".$sportname."matches2"); 
            $body = $response->getBody(); 
            // $body = $response->getBody()->getContents(); 
            event(new EventNotification($body));
            Storage::put('sports/'.$sportname.'.json', $body);
            return json_decode($response->getBody(), true);
            
            // return User::where('active', 1)->get();
        });
    }
}
