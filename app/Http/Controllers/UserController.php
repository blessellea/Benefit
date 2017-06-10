<?php
namespace app\Http\Controllers;

use app\Http\Controllers\AdminController;
use app\User;
use DB;
use app\Runner;
use app\Http\Requests\runnerRequest;
use app\Http\Requests\Admin\UserRequest;

class UserController extends Controller
{
    public function __construst()
    {
        $this->middleware('api.auth');
    }

    public function index()
    {
        $user = User::all()->sortBy('id');
        return view('user.index', compact('user'));
    }
// Runner
    public function getRunner()
    {
        Runner::all()->sortBy('runnerId');
    }

    public function postRunner(runnerRequest $request)
    {
        $location =  Runner::create($request->all());
//        $location =  DB::table('runner')create($request->all());

        return  $location;
    }
// runner end
    public function runner()
    {
        $users = User::all()->sortBy('id');
        return view('user.runner', compact('users'));
    }
    public function organizer()
    {
        $users = User::all()->sortBy('id');
        return view('user.organizer', compact('users'));
    }

//    public function validateUser()
//    {
//        $user = app('Dingo\Api\Auth\Auth')->user();
//
//        if(!$user) {
//            $responseArray = [
//                'message' => 'Not authorized. Please login again',
//                'status' => false
//            ];
//            return response(array($responseArray))->setStatusCode(403);
//        }
//        else {
//            $responseArray = [
//                'message' => 'User is authorized',
//                'status' => true
//            ];
//            return response(array($responseArray))->setStatusCode(200);
//        }
//    }
    public function validateUser()
    {
        if(Auth::guard('admin')->user()){
            $responseArray = [
                'message' => 'User is authorized',
                'status' => true
            ];
            return response(array($responseArray))->setStatusCode(200);
        }
        else if(Auth::guard('organizer')->user()){
            $responseArray = [
                'message' => 'User is authorized',
                'status' => true
            ];
            return response(array($responseArray))->setStatusCode(200);
        }
        else if(Auth::guard('organizer')->user()){
            $responseArray = [
                'message' => 'User is authorized',
                'status' => true
            ];
            return response(array($responseArray))->setStatusCode(200);
        }else {
            $responseArray = [
                'message' => 'Not authorized. Please login again',
                'status' => false
            ];
            return response(array($responseArray))->setStatusCode(403);
        }

    }

    public function blockOrganizer($id)
    {
        User::find($id)->update(array('blockOrganizer' => 'true' ));
        return back();
    }

    public function blockRunner($id)
    {
        User::find($id)->update(array('block' => 1));
        return back();
    }
    public function unblockOrganizer($id)
    {
        User::find($id)->update(array('block' => 0));
        return back();
    }
    public function unblockRunner($id)
    {
        User::find($id)->update(array('blockRunner' => 0));
        return back();
    }

}

