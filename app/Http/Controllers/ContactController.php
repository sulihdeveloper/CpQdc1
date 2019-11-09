<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::paginate(10);
        return view('contact.index',compact('contact'))->with('i');
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',

        ]);
        $store = new Contact;
        $store->name = $request->name;
        $store->name = $request->phone;
        $store->name = $request->address;
        $store->name = $request->email;

        $store->save();
        return redirect()->route('contact.index')->with('success','category created succesfully');
    }

    public function edit($id)
    {
        $show = contact::findOrFail($id);
        return view('contact.edit',compact('show'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required|max:100',
        ]);
        $update = Contact::findOrFail($id);
        $update->name = $request->name;

        $update->save();

        return redirect()->route('contact.index')->with('success','category updated successfully');
    }
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('contact.index')->with('success','delete success');
    }
}
