<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fietsen;
use Illuminate\Support\Facades\Auth;

class FietsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $fiets = Fietsen::OrderBy('model','desc')->get();
        // return view("fietsen.index")->with("fietsen", $fiets);
        $user = Auth::user();

        $data = [
            'fiets' => $user->fietsen,
        ];

        return view('fietsen.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fietsen.create');
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
            'model'=> 'required',
            'type'=> 'required',
            'kleur'=> 'required',
            'rem'=> 'required',

        ]);
            $fiets = new Fietsen();
            $fiets->model = $request->input('model');
            $fiets->type = $request->input('type');
            $fiets->kleur = $request->input('kleur');
            $fiets->rem = $request->input('rem');
            $fiets->user_id = auth()->user()->id;
            $fiets->save();

            return redirect('/home')->with('success', 'Fiets Toegevoegd');

}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fiets = Fietsen::find($id);
        $data = [
            'fiets' => $fiets,
            'reps' => $fiets->reparaties,
        ];
        return view('fietsen.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fietsen = Fietsen::find($id);
        return view('fietsen.edit')->with('fietsen', $fietsen);
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
            'model'=> 'required',
            'type'=> 'required',
            'kleur'=> 'required',
            'rem'=> 'required',

        ]);
            $fiets = Fietsen::find($id);
            $fiets->model = $request->input('model');
            $fiets->type = $request->input('type');
            $fiets->kleur = $request->input('kleur');
            $fiets->rem = $request->input('rem');
            $fiets->save();
            return redirect('/home')->with('success', 'Fiets Toegevoegd');

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rep = Fietsen::find($id);
        $rep->delete();

        return redirect('/home')->with('success', 'Fiets Verwijderd');
    }
}
