<?php

namespace App\Http\Controllers;
use App\Carrer;
use Illuminate\Http\Request;

class CarrerController extends Controller
{
    public function index()
    {
        $data = Carrer::latest()->paginate(5);
        return view('carrer.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
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
            'file' => 'required|pdf|max:2048',
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

        return redirect('carrer.index')->with('success', 'Data Added successfully.');
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
                'file' => 'required|pdf|max:2048',
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
                'file' => 'required|pdf|max:2048',
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
        $data = Carrer::findOrFail($id);
        $data->delete();

        return redirect('carrer.index')->with('success', 'Data is successfully deleted');
    }
}
