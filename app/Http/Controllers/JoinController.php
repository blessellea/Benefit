<?php
/**
 * Created by PhpStorm.
 * User: Bless
 * Date: 6/6/2017
 * Time: 1:24 PM
 */

namespace app\Http\Controllers;
use app\Http\Requests\eventRequest;
use app\Event;
use app\EventKm;
use app\Http\Requests\eventsrunnedRequest;
use app\Http\Requests\Request;
use app\Eventsrunned;


class JoinController extends Controller
{
    public function getIndex($id)
    {
        $category = EventKm::where('event', '=', $id)->get();
        $event = Event::find($id);

        return view('events.show', compact('event','category'));
    }

    public function join(eventsrunnedRequest $request)
    {
        Eventsrunned::create($request->all());

        return redirect('/');
    }
}