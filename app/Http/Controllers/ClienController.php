<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clien;

class ClienController extends Controller
{
    public function index()
    {
        $data = Clien::latest()->paginate(10);
        return view('clien.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('clien.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        $image = $request->file('photo');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name'=>   $request->name,
            'photo'=>   $new_name
        );

        Clien::create($form_data);

        return redirect('clien')->with('success', 'Data Added successfully.');
    }

    public function show($id)
    {
        $data = Clien::findOrFail($id);
        return view('clien.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Clien::findOrFail($id);
        return view('clien.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'name'=>  'required',
                'photo' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
            $image = $request->file('photo');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name' =>  'required',
                'photo' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
        }

        $form_data = array(
            'name'       =>   $request->name,
            'photo'     =>   $image_name
        );

        Clien::whereId($id)->update($form_data);

        return redirect('clien')->with('success', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $clien = Clien::where('id',$id)->first();
        File::delete('data_file/'.$clien->file);

        // hapus data
        Clien::where('id',$id)->delete();

        return redirect('clien.index')->with('success', 'Data is successfully deleted');
    }

}

