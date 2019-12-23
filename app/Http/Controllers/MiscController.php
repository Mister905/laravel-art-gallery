<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Misc;

use Illuminate\Support\Facades\Storage;

class MiscController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $misc = Misc::all();
        return view('misc.index')->with('misc', $misc);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('misc.create');
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
            'title' => 'required',
            'artist' => 'required',
            'year' => 'required',
            'location' => 'required',
            'image' => 'image|nullable|max:100000'
        ]);

        // Handle File Upload
        if ($request->hasFile('image')) {

            // File name with extension
            $file_ext = $request->file('image')->getClientOriginalName();
            // File name
            $filename = pathinfo($file_ext, PATHINFO_FILENAME);
            // File Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // File name to store
            $file_name_store = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/misc_images', $file_name_store);

        } else {
            $file_name_store = 'default.jpg';
        }

        $misc = new Misc;
        $misc->title = $request->input('title');
        $misc->artist = $request->input('artist');
        $misc->year = $request->input('year');
        $misc->location = $request->input('location');
        $misc->image = $file_name_store;
        $misc->save();

        return redirect()->route('misc.show', $misc->id)->with('success', 'Record Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $misc = Misc::find($id);
        return view('misc.show')->with('misc', $misc);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $misc = Misc::find($id);
        return view('misc.edit')->with('misc', $misc);
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
            'title' => 'required',
            'artist' => 'required',
            'year' => 'required',
            'location' => 'required',
        ]);

        $misc = Misc::find($id);

        // Handle File Upload
        if ($request->hasFile('image')) {

            // Delete current profile image unless default image is current
            if ($misc->image != 'default.jpg') {
                Storage::delete('public/misc_images/'.$misc->image);
            }

            // File name with extension
            $file_ext = $request->file('image')->getClientOriginalName();
            // File name
            $filename = pathinfo($file_ext, PATHINFO_FILENAME);
            // File Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // File name to store
            $file_name_store = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/work_images', $file_name_store);
            $misc->image = $file_name_store;
        }

        $misc->title = $request->input('title');
        $misc->artist = $request->input('artist');
        $misc->year = $request->input('year');
        $misc->location = $request->input('location');
        $misc->save();

        return redirect('misc/'.$misc->id.'/show')->with('success', 'Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $misc = Misc::find($id);
        if ($misc->image != 'default.jpg') {
            Storage::delete('public/misc_images/'.$misc->image);
        }    
        $misc->delete();
        return redirect('/misc')->with('success', 'Record Deleted'); 
    }
}
