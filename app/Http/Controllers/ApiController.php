<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function fetchApiData()
    {
        $client = new Client();
        $response = $client->get('https://api.example.com/data');

        $data = json_decode($response->getBody(), true);

        return view('api.index', ['data' => $data]);
    }
}
