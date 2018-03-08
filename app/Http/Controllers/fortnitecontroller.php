<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FortniteController extends Controller
{
    protected function getPlayer($playerName)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.fortnitetracker.com/v1/profile/psn/$playerName");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'TRN-Api-Key: 47112942-ea0a-42d5-ba4e-17d64259a4e1'
        ));
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    public function getFortniteStat(Request $request)
    {
        $data = [];

        if (!empty($request->leftPlayer)) {
            $leftPlayer = self::getPlayer($request->leftPlayer);
            $data['leftPlayer'] = $leftPlayer;
        }

        if (!empty($request->rightPlayer)) {
            sleep(2);
            $rightPlayer = self::getPlayer($request->rightPlayer);
            $data['rightPlayer'] = $rightPlayer;
        }

        return view('home')->with($data);
    }
}
