<?php

namespace App\Http\Controllers;

use App\Clien;
use App\News;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $news = News::latest()->paginate(5);
        return view('news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'    =>  'required',
            'isi'    =>  'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'judul'=>   $request->judul,
            'isi'=>   $request->isi,
            'image'=>   $new_name
        );

        News::create($form_data);

        return redirect('news')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return Response
     */
    public function show(News $news)
    {
        return view('news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return Response
     */
    public function edit(News $news)
    {
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param News $news
     * @return Response
     */
    public function update($id, Request $request)
    {
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'judul'=>  'required',
                'isi'=>  'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
            $image = $request->file('image');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'judul'=>  'required',
                'isi'=>  'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
        }

        $form_data = array(
            'judul'       =>   $request->judul,
            'isi'       =>   $request->isi,
            'image'     =>   $image_name
        );

        News::whereId($id)->update($form_data);

        return redirect('news')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('news')->where('id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('news.index')->with('success', 'Data is successfully deleted');    }
}
