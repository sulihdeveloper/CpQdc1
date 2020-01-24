<?php

namespace App\Http\Controllers;

use App\Clien;
use App\Lowker;
use Illuminate\Http\Request;
use App\Carrer;
use Session;

class CarrerController extends Controller
{

    public function index()
    {
        $carrer = Carrer::latest()->paginate(10);
        return view('carrer.index', compact('carrer'))->with('i');
    }

    public function create(Request $request)
    {
        return view('carrer.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'first_name'    =>  'required',
            'last_name'    =>  'required',
            'email'     =>  'required',
            'phone'     =>  'required',
            'address'     =>  'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'required|',
        ]);

        $image = $request->file('photo');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'first_name'=>   $request->first_name,
            'last_name'=>   $request->last_name,
            'email'=>   $request->email,
            'phone'=>   $request->phone,
            'address'=>   $request->address,
            'photo'=>   $new_name,
            'file'=>   $new_name
        );

        Carrer::create($form_data);

        return redirect('formcarrer')->with('success', 'Data Added successfully.');
    }

    public function show($id)
    {
        $data = Carrer::findOrFail($id);
        return view('carrer.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Carrer::findOrFail($id);
        return view('carrer.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('photo');
        if($image != '')
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'    =>  'required',
                'email'     =>  'required',
                'phone'     =>  'required',
                'address'     =>  'required',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'first_name'    =>  'required',
                'last_name'    =>  'required',
                'email'     =>  'required',
                'phone'     =>  'required',
                'address'     =>  'required',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
            ]);
        }

        $form_data = array(
            'first_name'=>   $request->first_name,
            'last_name'=>   $request->last_name,
            'email'=>   $request->email,
            'phone'=>   $request->phone,
            'address'=>   $request->address,
            'photo'=>   $new_name,
            'file'=>   $new_name
        );

        Carrer::whereId($id)->update($form_data);

        return redirect('carrer.index')->with('success', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $carrer = Carrer::destroy($id);
        Session::flash('flash_message','data berhasil di hapus');
        return redirect()->action('CarrerController@index');

    }
}
