<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Event;
use Response;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //$clients = Event::all()->where('user_id', Auth::user()->id);
        //Temp for frontend dev
        $events = Event::all()->where('user_id', 10);
        $events_out = [];
        foreach($events as $event) { 
            array_push($events_out, $event);
        }
    
        return Response::json(array(
                    'error' => false,
                    'events' => $events_out,
                    'status_code' => 200
                ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Event;

        //change to Auth::user()->id
        $data->user_id = 10;
        $data->client_id = 1;
        $data->businessId = $request->businessId;
        $data->title = $request->title;
        $data->type = $request->type;
        $data->info = $request->info;
        $data->created_at = date("Y-m-d H:i:s");
        $data->updated_at = date("Y-m-d H:i:s");

        $data->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$client = Event::where('user_id', Auth::user()->id)->where('businessId', $id)->first();
        $events = Event::all()->where('businessId', $id);

        return Response::json(array(
                    'error' => false,
                    'events' => $events,
                    'status_code' => 200
                ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
