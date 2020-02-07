<?php

namespace App\Http\Controllers;
use App\Map;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MapsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
   /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $data = Map::latest()->paginate(5);
        return view('map.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('map.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'tower'=>'required',
            'lat' => 'required',
            'lng' => 'required',
            'alamat'=>'required',
            'provinsi'=>'required'
        ]);

        Map::create($request->all());

        return redirect()->route('map.index')
                        ->with('success','Data is created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $data = Map::findOrFail($id);
        return view('map.view', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = Map::findOrFail($id);
        return view('map.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name'=>'required',
            'tower'=>'required',
            'lat' => 'required',
            'lng' => 'required',
            'alamat' => 'required',
            'provinsi'=>'required'
        ]);
        Map::whereId($id)->update($validateData);

        return redirect('map')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
         $data = Map::findOrFail($id);
        $data->delete();
        return redirect('map')->with('success', 'Data is successfully deleted');
    }
}
