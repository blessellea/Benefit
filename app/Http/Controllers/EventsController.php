<?php

namespace app\Http\Controllers;
use app\Http\Requests\eventRequest;
use app\Event;
use app\EventKm;
use app\Http\Requests\Request;
use app\Joinevent;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all()->sortBy('event_id');
        return view('events.index', compact('events'));
    }

    public function show($id)
    {
        $category = EventKm::where('event', '=', $id)->get();
        $event = Event::find($id);

        return view('events.show', compact('event','category'));
    }

    public function join($id){
        session_start();

        $user = Auth::guard('users')->user()->id;

        Joinevent::create(
            ['user_id' => $user, 'event_cat' => $id]
        );
        return redirect('/ ');

    }

    public function viewevents()
    {
        $events = Event::all()->sortBy('event_id');
        return view('events.viewall', compact('events'));
    }

    public function activeevents()
    {
        $events = Event::where('status', '=', 'Active')->get();
        $category = EventKm::all();
        return view('events.activeEvent', compact('events', 'category'));
    }


    public function approve($id)
    {
        $event = Event::find($id)->update(array('status' => 'Active'));
        return back();
    }

    public function decline($id)
    {
        $event = Event::find($id)->update(array('status' => 'Decline'));
        return back();
    }

    public function finish($id)
    {
        $event = Event::find($id)->update(array('status' => 'Finish'));
        return back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(eventRequest $request)
    {
        Event::create($request->all());
        return redirect('events');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        $event = Event::find($id);
//
//        return view('events.show', compact('event'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit', compact('event'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(eventRequest $request, $id)
    {
        $event = Event::find($id);
        $input = $request->all();
        $event->fill($input)->save();

        return redirect('events');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::find($id)->delete();
        return redirect('events');
    }
}
