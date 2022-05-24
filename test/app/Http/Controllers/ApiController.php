<?php

namespace App\Http\Controllers;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){

        $response = Http::get("https://api.demo.sitehost.co.nz/1.0/srs/list_domains.json?client_id=293785&apikey=d17261d51ff7046b760bd95b4ce781ac");
        $response = $response->json();
        dd($response);
        return view('index',['data' => $response['msg']]);
    }

    //
}
