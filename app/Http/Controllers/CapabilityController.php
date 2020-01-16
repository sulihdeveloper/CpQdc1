<?php

namespace App\Http\Controllers;

use App\capability;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;
use DB;

class CapabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $capability = Capability::latest()->paginate(5);
        return view('capability.index',compact('capability'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('capability.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'    =>  'required',
            'isi'    =>  'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'judul'=>   $request->judul,
            'isi'=>   $request->isi,
            'image'=>   $new_name
        );

        Capability::create($form_data);

        return redirect('capability')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return Response
     */
    public function show(Capability $capability)
    {
        return view('capability.show',compact('capability'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return Response
     */
    public function edit(Capability $capability)
    {
        return view('capability.edit',compact('capability'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param News $news
     * @return Response
     */
    public function update($id, Request $request)
    {
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'judul'=>  'required',
                'isi'=>  'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
            $image = $request->file('image');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'judul'=>  'required',
                'isi'=>  'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
        }

        $form_data = array(
            'judul'       =>   $request->judul,
            'isi'       =>   $request->isi,
            'image'     =>   $image_name
        );

        capability::whereId($id)->update($form_data);

        return redirect('capability')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        $capability = capability::destroy($id);
        Session::flash('flash_message', 'data berhasil di hapus');
        return redirect()->action('CapabilityController@index');
    }
}
