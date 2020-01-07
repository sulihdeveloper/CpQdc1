<?php

namespace App\Http\Controllers;

use App\Lowker;
use Illuminate\Http\Request;

class LowkerController extends Controller
{
    public function index()
    {
        $lowker = Lowker::latest()->paginate(3);
        return view('lowker.index', compact('lowker'))->with('id');
    }

    public function create()
    {
        $lowker = Lowker::latest()->paginate(10);
        return view('lowker.create', compact('lowker'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'requerments' => 'required',
            'description' => 'required',
            'closing_date' => 'required',
        ]);

        $lowker = new Lowker();
        $lowker->requerments = $request->requerments;
        $lowker->description = $request->description;
        $lowker->closing_date = $request->closing_date;

        $lowker->save();

        return redirect()->route('lowker.index')->with('success', 'new loker created');
    }

    public function show($id)
    {
        $lowker = Lowker::latest()->paginate(10);
        return view('lowker.show', compact('lowker'));
    }

    public function edit($id)
    {
        $lowker = Lowker::latest()->paginate(10);
        return view('lowker.edit')->withCarousels($lowker);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'requerments' => 'required',
            'description' => 'required',
            'closing_date' => 'required',
        ]);

        $lowker = Lowker::findOrFail($id);
        $lowker->requerments = $request->requerments;
        $lowker->description = $request->description;
        $lowker->closing_date = $request->closing_date;

        $lowker->save();

        return redirect()->route('lowker.index')->with('success', 'new loker created');
    }

    public function destroy($id)
    {
        Lowker::findOrFail($id)->delete();
        return redirect()->route('lowker.index')->with('success','delete success');
    }
    }
