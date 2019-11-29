<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use date;
use App\Category;
use Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::latest()->paginate(10);
        return view('category.index',compact('category'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
            'name' => 'required|max:100',
            'closing_date' => 'date|required|max:100',
            ]);
        $store = new Category;
        $store->name = $request->name;
        $store->closing_date = $request->closing_date;
        $store->user_id = Auth::user()->id;

        $store->save();
        return redirect()->route('category.index')->with('success','category created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Category::findOrFail($id);
        return view('category.edit',compact('show'));
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
        $this->validate($request, [
            'name'=>'required|max:100',
            'closing_date' => 'date|required|max:100',

            ]);
        $update = Category::findOrFail($id);
        $update->name = $request->name;
        $update->closing_date = $request->closing_date;
        $update->user_id = Auth::user()->id;
        $update->save();

        return redirect()->route('category.index')->with('success','category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('category.index')->with('success','delete success');
    }
}
