<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use Validator;

class DynamicFieldController extends Controller
{
    function index()
    {
        return view('dynamic_field');
    }

    function insert(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'responsibilities' => 'required',
            'requerments' => 'required',
            'description' => 'required',
            'closing_date' => 'required',
        ]);
        $insert = new dynamic;
        $insert->name = $request->name;
        $insert->responsibilities = $request->responsibilities;
        $insert->requerments = $request->requerments;
        $insert->description = $request->description;
        $insert->closing_date = $request->closing_date;
        $insert->save();
        return redirect()->route('dynamic-field.insert')->with('success', 'category created succesfully');
    }
}
