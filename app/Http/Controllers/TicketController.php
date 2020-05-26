<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TicketController extends Controller
{
    private $url = '';

    public function __construct()
    {
        $this->url =  config('ticketmaster.api_url');
    }


    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $response = Http::get($this->url,[
            'size'=>'200',
            'countryCode'=>'DE',
            'apikey'=>config('ticketmaster.api_key')
        ]);
        
        $allEventsInGermany = $response->json()['_embedded']['venues'];
        return view('welcome', compact('allEventsInGermany'));
    }

    /**
     * Display the specified resource by city.
     */
    public function showShowsByCity(Request $request)
    {
        $response = Http::get($this->url . '&stateCode=' . $request->get('cities'));
        //Wenn "Alle Städte" im Dropdown angegeben werde, redirect
        if($request->get('cities') == "*") {
            return redirect()->route('home');
        } else {
            $allEventsInGermany = $response->json()['_embedded']['venues'];
        }
        return view('welcome', compact('allEventsInGermany'));
    }

    /**
     * Display the specified resource.
     */
    public function show($ticketID)
    {
        $response = Http::get($this->url . '&id=' . $ticketID);
        $event = $response->json()['_embedded']['venues'];
        return view('show', compact('event'));
    }
}
