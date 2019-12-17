<?php

namespace App\Http\Controllers;

use Auth;
use App\Product;
use App\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::latest()->paginate(10);
        return view('product.index',compact('product'))->with('id');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::latest()->paginate(10);
        $cat = Category::all();
        return view('product.create',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $text = $section->addText($request->get('responsibilities'));
        $text = $section->addText($request->get('requerments'));
        $text = $section->addText($request->get('desc'));

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('Appdividend.docx');
        return response()->download(public_path('phpflow.docx'));

        $product = new Product;
        $product->responsibilities = $request->responsibilities;
        $product->requerments = $request->requerments;
        $product->description = $request->desc;
        $product->category_id = $request->cat;
        $product->user_id = Auth::user()->id;

        $product->save();

        return redirect()->route('product.index')->with('success','new product created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Product::findOrFail($id);
        $cat = Category::all($id);
        return view('product.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::all();
        $row = Product::findOrFail($id);
        return view('product.edit',compact('row','cat'));
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
            'responsibilities' => 'required|max:10000',
            'requerments' => 'required|max:10000',
            'desc' => 'required',
            'cat' => 'required'
        ]);


        $update = Product::findOrFail($id);
        $update->responsibilities = $request->responsibilities;
        $update->requerments = $request->requerments;
        $update->description = $request->desc;
        $update->category_id = $request->cat;

        $update->save();
        return redirect()->route('product.index')->with('success','product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('product.index')->with('success','delete success');
    }
}
