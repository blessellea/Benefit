<?php

namespace app\Http\Controllers;
use Illuminate\Http\Request;
use app\Http\Requests;
use app\Http\Requests\benefactorRequest;
use app\Benefactor;

class BenefactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefactors = benefactor::all()->sortBy('id');
        return view('benefactor.index', compact('benefactors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('benefactor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(benefactorRequest $request)
    {
         $benefactor =  benefactor::create($request->all());
        return redirect()->route('benefactors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $benefactor = benefactor::find($id);

        return view('benefactor.show', compact('benefactor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $benefactor = benefactor::find($id);
        return view('benefactor.edit', compact('benefactor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(benefactorRequest $request, $id)
    {
        $benefactor = benefactor::find($id);
        $input = $request->all();
        $benefactor->fill($input)->save();

        return redirect('benefactors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        benefactor::find($id)->delete();
        return redirect('benefactors');
    }
}
