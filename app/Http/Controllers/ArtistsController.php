<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artist;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();
        return view('artists.index')->with('artists', $artists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'birth_name' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'death_date' => 'required',
            'death_place' => 'required',
            'nationality' => 'required',
            'biography' => 'required',
        ]);

        $artist = new Artist;
        $artist->name = $request->input('name');
        $artist->birth_name = $request->input('birth_name');
        $artist->birth_date = $request->input('birth_date');
        $artist->birth_place = $request->input('birth_place');
        $artist->death_date = $request->input('death_date');
        $artist->death_place = $request->input('death_place');
        $artist->nationality = $request->input('nationality');
        $artist->save();
        
        return redirect()->route('artists.show', ['artist' => $artist->id])->with('success', 'Record Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::find($id);
        return view('artists.show')->with('artist', $artist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::find($id);
        return view('artists.edit')->with('artist', $artist);
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
        $this->validate($request, [
            'name' => 'required',
            'birth_name' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'death_date' => 'required',
            'death_place' => 'required',
            'nationality' => 'required',
            'biography' => 'required',
        ]);

        $artist = Artist::find($id);
        $artist->name = $request->input('name');
        $artist->birth_name = $request->input('birth_name');
        $artist->birth_date = $request->input('birth_date');
        $artist->birth_place = $request->input('birth_place');
        $artist->death_date = $request->input('death_date');
        $artist->death_place = $request->input('death_place');
        $artist->nationality = $request->input('nationality');
        $artist->save();


        return redirect()->route('artists.show', ['artist' => $artist->id])->with('success', 'Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
