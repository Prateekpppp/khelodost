<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SportookBet;

class SportookBetController extends Controller
{
    //
    public function placebet(Request $request){
        dd('$request',$request->all());

        // foreach ($request->all() as $req) {
        //     i(!$req){

        //     }
        // }

        $user = User::getCurrentUser();
        $user->unsattled_amount += $request->bet_amount;
        $user->save();
        
        $request->username = $user->username;

        $request->betId = substr($request->username,0,5).'_'.rand(1000,9999).'_'.substr(time(),6,count(time())-1);

        $bet = new SportookBet();
        $bet->username = $request->username;
        $bet->betId = $request->betId;
        $bet->mname = $request->mname;
        $bet->eventId = $request->eventId;
        $bet->marketId = $request->marketId;
        $bet->wallet_before = $user->wallet_before;
        $bet->oddVal = $request->oddVal;
        $bet->bet_amount = $request->bet_amount;
        $bet->profit = $request->profit;
        // $bet->loss = $request->loss;
        $bet->ip = $request->ip();
        $bet->status = 1;
        $bet->save();

        return response()->json([
            'code'=>'200',
            'message'=> 'Bet Placed Successfully'
        ]);


    }
}
