<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            Session::set('user-type', $request->input('user-type'));
        }
        else {
            if ( !Session::has('user-type')){
                if ( Auth::guard('user')->user()->flag === 1){
                    Session::set('user-type', 'admin');
                }
                elseif ( Auth::guard('organizer')->user()->flag === 1){
                    Session::set('user-type', 'organizer');
                }
                else{
                    Session::set('user-type', 'runner');
                }
            }
        }
        return view('home');
    }

    
}
