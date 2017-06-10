<?php

namespace app\Http\Controllers;
use app\Http\Requests\BeneRequest;
use app\AreaOfInterest;
use app\Beneficiary;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bene = Beneficiary::all()->sortBy('bene_id');
        return view('beneficiary.index', compact('bene'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aoi = AreaOfInterest::all();

        return view('beneficiary.create', compact('aoi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BeneRequest $request)
    {
        Beneficiary::create($request->all());

        return redirect('beneficiary');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bene = Beneficiary::find($id);
        $aoi = AreaOfInterest::all();

        return view('beneficiary.show', compact('bene', 'aoi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $bene = Beneficiary::find($id);
        $aoi = AreaOfInterest::all();

        return view('beneficiary.edit', compact('bene', 'aoi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BeneRequest $request, $id)
    {
        $bene = Beneficiary::find($id);
        $input = $request->all();
        $bene->fill($input)->save();

        return redirect('beneficiary');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Beneficiary::find($id)->delete();

        return redirect('beneficiary');
    }
}
