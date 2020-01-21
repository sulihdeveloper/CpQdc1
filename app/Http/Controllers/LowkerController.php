<?php

namespace App\Http\Controllers;

use App\Lowker;
use Illuminate\Http\Request;
use Session;

class LowkerController extends Controller
{
    public function index()
    {
        $lowker = Lowker::latest()->paginate(3);
        return view('lowker.index', compact('lowker'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

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
        return view('lowker.show', compact('id'));
    }

    public function edit(Lowker $lowker)
    {
        return view('lowker.edit',compact('lowker'));
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
        $lowker = Lowker::destroy($id);
        Session::flash('flash_message','data berhasil di hapus');
        return redirect()->action('LowkerController@index');
    }
}
