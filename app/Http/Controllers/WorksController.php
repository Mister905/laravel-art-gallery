<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artist;

use App\Work;

use Illuminate\Support\Facades\Storage;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($artist_id)
    {
        $artist = Artist::find($artist_id);

        $works = Work::where('artist_id', $artist_id)->get();

        $data = [
            'artist'  => $artist,
            'works'   => $works
        ];

        return view('works.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($artist_id)
    {
        $artist = Artist::find($artist_id);
        return view('works.create')->with('artist', $artist);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $artist_id)
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
            $path = $request->file('image')->storeAs('public/work_images', $file_name_store);

        } else {
            $file_name_store = 'default.jpg';
        }

        $work = new Work;
        $work->artist_id = $artist_id;
        $work->title = $request->input('title');
        $work->artist = $request->input('artist');
        $work->year = $request->input('year');
        $work->location = $request->input('location');
        $work->image = $file_name_store;
        $work->save();
        
        return redirect('works/'.$work->id.'/show')->with('success', 'Record Created'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($work_id)
    {
        $work = Work::find($work_id);
        return view('works.show')->with('work', $work);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($work_id)
    {
        $work = Work::find($work_id);
        return view('works.edit')->with('work', $work);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $work_id)
    {
        $this->validate($request, [
            'title' => 'required',
            'artist' => 'required',
            'year' => 'required',
            'location' => 'required',
        ]);

        $work = Work::find($work_id);

        // Handle File Upload
        if ($request->hasFile('image')) {

            // Delete current profile image unless default image is current
            if ($work->image != 'default.jpg') {
                Storage::delete('public/work_images/'.$work->image);
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
            $work->image = $file_name_store;
        }

        $work->title = $request->input('title');
        $work->artist = $request->input('artist');
        $work->year = $request->input('year');
        $work->location = $request->input('location');
        $work->save();

        return redirect('works/'.$work->artist_id.'')->with('success', 'Record Deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($work_id)
    {
        $work = Work::find($work_id);    
        $work->delete();
        return redirect('works/'.$work->artist_id.'')->with('success', 'Record Deleted'); 
    }
}
