<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reparatie;

class RepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reps =  Reparatie::OrderBy('created_at','desc')->get();
        return view('reparaties.index')->with('reps', $reps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reparaties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'titel'=> 'required',
            'opmerkingen'=> 'required',

        ]);
            //maak post

            $reparatie = new Reparatie;
            $reparatie->titel = $request->input('titel');
            $reparatie->datum = $request->input('datum');
            $reparatie->tijdstip = $request->input('tijdstip');
            $reparatie->opmerkingen = $request->input('opmerkingen');
            $reparatie->kosten = '20';
            $reparatie->user_id = auth()->user()->id;
            $reparatie->save();

            return redirect('/reparaties')->with('success', 'Reparatie Ingepland');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reparatie = Reparatie::find($id);
        return view('reparaties.show')->with('reps', $reparatie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reparatie = Reparatie::find($id);
        return view('reparaties.edit')->with('reps', $reparatie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'titel'=> 'required',
            'opmerkingen'=> 'required',
            'tijdstip'=> 'required',
            'datum'=> 'required',

        ]);
            //maak post

            $reparatie = Reparatie::find($id);
            $reparatie->titel = $request->input('titel');
            $reparatie->datum = $request->input('datum');
            $reparatie->tijdstip = $request->input('tijdstip');
            $reparatie->opmerkingen = $request->input('opmerkingen');
            $reparatie->kosten = '20';
            $reparatie->save();

            return redirect('/reparaties')->with('success', 'Reparatie Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rep = Reparatie::find($id);
        $rep->delete();

        return redirect('/reparaties')->with('success', 'Reparatie Canceled');

    }
}
