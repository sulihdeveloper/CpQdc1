<?php
namespace App\Http\Controllers;

use App\Post;
use App\Product;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\Response;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $about = Post::latest()->paginate(5);
        return view('about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $about = Post::where('page',1)->first();
       if($about){
        return view('about.index');
       }else{
        return view('about.create');
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'section_one' => 'required',
            'section_two' => 'required',
            ]);

        $posts = new post;
        $posts->section_one = $request->section_one;
        $posts->section_two = $request->section_two;
        $posts->page = Auth::user()->id;
        $posts->user_id = Auth::user()->id;

        $posts->save();

        return redirect('about')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $edit = Post::findOrFail($id);
        return view('about.edit',compact('edit'));
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
        $this->validate($request, [
            'section_one' => 'required',
            'section_two' => 'required',
            ]);


        $posts = Post::findOrFail($id);
        $posts->section_one = $request->section_one;
        $posts->section_two = $request->section_two;

        $posts->save();
        return redirect('about')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {$data = About::findOrFail($id);
        $data->delete();

        return redirect('about.index')->with('success', 'Data is successfully deleted');
    }

}
