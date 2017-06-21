<?php

namespace app\Http\Controllers;
use app\Event;
use app\EventKm;
use app\Runner;
use app\Eventsrunned;
use app\Http\Requests\benefactorRequest;
use app\Http\Requests\userRequest;
use app\Http\Requests\eventsrunnedRequest;
use app\Http\Requests\runnerRequest;
use app\Http\Requests\locationRequest;
use app\Benefactor;
use app\Beneficiary;
use app\user;
use app\Runnerlocation;
use DB;


class ApiBenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//   beneficiary

    public function viewEvents()
    {
        $events = Event::where('status', 'Active')->get();
//        $cat = EventKm::all();
//        $events =
//            Event::where('status', 'Active')
//            ->Join('eventkm', 'events.event_id', '=', 'eventkm.event')
//            ->select('events.*')
//            ->get();

        return $events;
    }

    //    RunnerLocation
    public function postLocation(locationRequest $request)
    {
        $event_id = $request->event_id;
        $user_id = $request->user_id;

        $aw = Runnerlocation::where('event_id', $event_id)->where('user_id', $user_id)->count();

       if($aw == 1 ){
           Runnerlocation::where('event_id', $event_id)->where('user_id', $user_id)->update([
                'event_id' => $event_id,
                'user_id' => $user_id,
                'lat' => $request->lat,
                'lng' => $request->lng
            ]);
            $location = 9;
        }
        elseif($aw == 0 ){
            $location =  Runnerlocation::create($request->all());
        }

        return  $location;
    }

    public function location($id)
    {
//        $location = runnerlocation::where('event_id', $id)->get();
        $location = runnerlocation::select('events.name','users.fname','runnerlocation.lat','runnerlocation.lng')
            ->join('events', 'runnerlocation.event_id', '=', 'events.event_id')
            ->join('users', 'runnerlocation.user_id', '=', 'users.id')
            ->where('runnerlocation.event_id', $id)->get();

        return $location;
    }

    public function viewLocation()
    {
//        $location = runnerlocation::all();
        $location = Runnerlocation::select('events.name','users.fname','runnerlocation.lat','runnerlocation.lng')
            ->join('events', 'runnerlocation.event_id', '=', 'events.event_id')
            ->join('users', 'runnerlocation.user_id', '=', 'users.id')
//            ->select( 'events.name','users.fname','users.lname','runnerlocation.lat','runnerlocation.lng')
            ->get();

        return $location;
    }


//  register Events -> runner
    public function registerEvent(eventsrunnedRequest $request)
    {
        $add =  Eventsrunned::create($request->all());
        return  $add;
    }

//    Users
    public function storeUser(userRequest $request)
    {
        $user =  user::create($request->all());
        return  $user;
    }

//beneficiary
    public function viewAllbeneficiary()
    {
        $bene = Beneficiary::all()->sortBy('bene_id');
        return $bene;
    }

//benefactor
    public function index()
    {
        $benefactors = benefactor::all();
        return $benefactors;

    }

    public function update($id, benefactorRequest $request)
    {
        $benefactor = benefactor::find($id);
        $input = $request->all();
        $benefactor->fill($input)->save();

        return $benefactor;
    }

    public function show($id)
    {
        $benefactor = benefactor::findOrFail($id);
        return $benefactor;
    }

    public function store(benefactorRequest $request)
    {
        $benefactor =  benefactor::create($request->all());
        return  $benefactor;
    }

    public function destroy($id)
    {
        benefactor::find($id)->delete();
        // $benefactor = 
        return "Benefactor is deleted";
    }

//Runner
    public function runnerindex()
    {
        $Runners = Runner::all();
        return $Runners;

    }

    public function runnerupdate($id, runnerRequest $request)
    {
        $Runner = Runner::find($id);
        $input = $request->all();
        $Runner->fill($input)->save();

        return $Runner;
    }

    public function runnershow($id)
    {
        $Runner = Runner::findOrFail($id);
        return $Runner;
    }

    public function runnerstore(runnerRequest $request)
    {
        $Runner =  Runner::create($request->all());
        return  $Runner;
    }

    public function runnerdestroy($id)
    {
        Runner::find($id)->delete();
        // $Runner =
        return "Runner is deleted";
    }

    public function login(userRequest $request)
    {
        $runner = User::findOrFail($request->all());
//        if($runner)
        return $runner;
    }
}

