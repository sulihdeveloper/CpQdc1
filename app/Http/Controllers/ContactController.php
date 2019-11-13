<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::latest()->paginate(5);
        return view('contact.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
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
            'name'    =>  'required',
            'email'     =>  'required',
            'subject'     =>  'required',
            'message'     =>  'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name'=>   $request->name,
            'email'=>   $request->email,
            'subject'=>   $request->subject,
            'message'=>   $request->message,
            'image'=>   $new_name
        );

        Contact::create($form_data);

        return redirect('contact')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Contact::findOrFail($id);
        return view('contact.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Contact::findOrFail($id);
        return view('contact.edit', compact('data'));
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
                'name'=>  'required',
                'email'=>  'required',
                'subject'=>  'required',
                'message'=>  'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name' =>  'required',
                'email'=>  'required',
                'subject'=>  'required',
                'message'=>  'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
        }

        $form_data = array(
            'name'       =>   $request->name,
            'email'        =>   $request->email,
            'subject'       =>   $request->subject,
            'message'        =>   $request->message,
             'image'            =>   $image_name
        );

        Contact::whereId($id)->update($form_data);

        return redirect('contact')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Contact::findOrFail($id);
        $data->delete();

        return redirect('contact.index')->with('success', 'Data is successfully deleted');
    }
}

