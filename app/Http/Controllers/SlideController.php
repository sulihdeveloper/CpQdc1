<?php

namespace App\Http\Controllers;

use App\Slide;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide= Slide::paginate(10);
        return view('slide.index',compact('slide'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('slide.create');
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
            'title' => 'required|max:100',
            'desc' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        $slide = new Slide;

            $slide->title = $request->title;
            $slide->description = $request->desc;
            $slide->link = $request->link;
            $slide->user_id = Auth::user()->id;
            if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename =  time().','.$image->getClientOriginalExtension();
            $location = public_path('img/',$filename);
            //$slide::make($image)->save($location);
            $slide->image = $filename;

        }
        $slide->save();
        return redirect()->route('slide.index')->with('success','new slide created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Slide::findOrFail($id);
        return view('slide.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Slide::findOrFail($id);
        return view('slide.edit',compact('row'));
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
            'title' => 'required|max:100',
            'desc' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        $update = Slide::findOrFail($id);
        $update->title = $request->title;
        $update->description = $request->desc;
        if($request->hasFile('image')){
            Storage::delete('slides/'.$request->oldimage);
            $file = $request->image->store('slides/');
            $update->image = $request->image->hashName();
            // echo $request->oldimage;
        }
        $update->save();
        return redirect()->route('slide.index')->with('success','slide updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        if($slide->image){
            Storage::delete('slides/'.$slide->image);
        }
        $slide->delete();
        return redirect()->route('slide.index')->with('success','delete success');
    }
}
