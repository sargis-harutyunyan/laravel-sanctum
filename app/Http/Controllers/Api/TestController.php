<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function testToken(Request $request)
    {
        if ($request->has('token')) {
            $token = $request->get('token');
            $client = new Client();
            $r = $client->get(url('/api/auth'), ['headers' => ['Authorization' => 'Bearer ' . $token]]);
            $c = $r->getBody()->getContents();

            dd(json_decode($c));
        }
    }
}
