<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Home;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Respons
     */
    public function index()
    {
        $slide = Slide::latest()->paginate(10);
        return view('slide.index', compact('slide'))->with('i');
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


    public function upload()
    {
        $image = Slide::get();
        return view('upload', ['image' => $image]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('slides'), $new_name);
        $form_data = array(
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $new_name
        );

        Slide::create($form_data);

        return redirect('slide')->with('success', 'Data Added successfully.');
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
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'link' => 'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('slides'), $image_name);
        }
        else
        {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'link' => 'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
        }

        $form_data = array(
            'title'       =>   $request->title,
            'description' =>   $request->description,
            'link'        =>   $request->link,
            'image'       =>   $image_name
        );

        Slide::whereId($id)->update($form_data);

        return redirect('slide.index')->with('success', 'Data is successfully updated');
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
