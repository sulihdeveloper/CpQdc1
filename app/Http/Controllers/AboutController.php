<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Auth;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = Post::latest()->paginate(5);
        return view('about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'section_one' => 'required',
            'section_two' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            ]);

        $image = $request->file('photo');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'section_one'=>   $request->section_one,
            'section_two'=>   $request->section_two,
            'photo'=>   $new_name
        );

        Post::create($form_data);

        return redirect('about')->with('success', 'Data Added successfully.');
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
        $edit = Post::findOrFail($id);
        return view('about.edit',compact('edit'));
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
                'section_one' => 'required',
                'section_two' => 'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
            $image = $request->file('image');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'section_one' => 'required',
                'section_two' => 'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
        }

        $form_data = array(
            'section_one'=>   $request->section_one,
            'section_two'=>   $request->section_two,
            'image'     =>   $image_name
        );

        Post::whereId($id)->update($form_data);

        return redirect('about')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {$data = About::findOrFail($id);
        $data->delete();

        return redirect('about.index')->with('success', 'Data is successfully deleted');
    }

}
