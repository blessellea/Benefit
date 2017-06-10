<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

use app\Http\Requests;
use Illuminate\Support\Facades\Auth;

class OrganizerController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:organizer');
    }

    public function index(){
//    	 return Auth::guard('organizer')->user();
    	return view('organizer.dashboard');
    }
}
