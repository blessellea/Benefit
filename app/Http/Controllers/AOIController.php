<?php

namespace app\Http\Controllers;

use app\Http\Requests;
use Illuminate\Http\Request;
use app\Http\Requests\AOIRequest;
use app\AreaOfInterest;

class AOIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aoi = AreaOfInterest::all()->sortBy('genre_id');
        return view('areaofinterest.index', compact('aoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areaofinterest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AOIRequest $request)
    {
        AreaOfInterest::create($request->all());
        return redirect()->route('areaofinterest.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aoi = AreaOfInterest::find($id);

        return view('areaofinterest.show', compact('aoi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aoi = AreaOfInterest::find($id);
        return view('areaofinterest.edit', compact('aoi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AOIRequest $request, $id)
    {
        $aoi = AreaOfInterest::find($id);
        $input = $request->all();
        $aoi->fill($input)->save();

        return redirect('areaofinterest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AreaOfInterest::find($id)->delete();
        return redirect('areaofinterest');
    }
}
