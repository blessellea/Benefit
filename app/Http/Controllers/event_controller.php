<?php
namespace app\Http\Controllers;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\event_model;

class event_controller extends Controller
{
    public function index()
    {
        $data = event_model::all();
        return view('event.index')->with('data',$data);
    }


    public function mapindex()
    {

        return view('map.index');

    }

    /*
     * Add student data
     */
    public function add(Request $request)
    {
        $data = new event_model;
        $data -> time = $request -> time;
        $data -> date = $request -> date;
        $data -> venue = $request -> venue;

        $data -> regfee = $request -> regfee;
        $data -> olregsite = $request -> olregsite;
        $data -> event_name = $request -> event_name;
        $data -> description = $request -> description;
        $data -> organizer = $request -> organizer;


        $data -> save();
        return back()
            ->with('success','You have successfully added an event.');
    }

    /*
     * View data
     */
    public function view(Request $request)
    {
        if($request->ajax()){
            $id = $request->id;
            $info = event_model::find($id);
            //echo json_decode($info);
            return response()->json($info);
        }
    }

    /*
    *   Update data
    */
    public function update(Request $request)
    {
        $id = $request -> edit_id;
        $data = event_model::find($id);
        $data -> time = $request -> edit_time;
        $data -> date = $request -> edit_date;
        $data -> venue = $request -> edit_venue;

        $data -> regfee = $request -> edit_regfee;
        $data -> olregsite = $request -> edit_olregsite;
        $data -> event_name = $request -> edit_event_name;
        $data -> description = $request -> edit_description;
        $data -> organizer = $request -> edit_organizer;




        $data -> save();
        return back()
            ->with('success','Event successfully updated.');
    }

    /*
    *   Delete record
    */
    public function delete(Request $request)
    {
        $id = $request -> id;
        $data = event_model::find($id);
        $response = $data -> delete();
        if($response)
            echo "Event deleted successfully.";
        else
            echo "There was a problem. Please try again later.";
    }
}
?>