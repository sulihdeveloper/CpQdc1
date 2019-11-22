<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::latest()->paginate(10);
        return view('contact.index', compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>  'required',
            'email'=> 'required',
            'subject'=>   'required',
            'message'=> 'required',
            'image'=>   'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name'=>   $request->name,
            'email'=> $request->email,
            'subject'=>   $request->subject,
            'message'=> $request->message,
            'image'=>   $new_name
        );
        Contact::create($form_data);
        return redirect('contact')->with('success', 'Data Added successfully.');
    }

    public function show($id)
    {
        $data = Clien::findOrFail($id);
        return view('contact.show', compact('data'));
    }

    public function edit($id)
    {
        $data = Clien::findOrFail($id);
        return view('contact.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'name'=>  'required',
                'email'=> 'required',
                'subject'=>   'required',
                'message'=> 'required',
                'image'=>   'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
            $image = $request->file('image');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name' =>  'required',
                'email'=> 'required',
                'subject'=>   'required',
                'message'=> 'required',
                'image' =>  'required|image|:jpeg,jpg,png,gif|max:100000',
            ]);
        }
        $form_data = array('name'=>   $request->name,
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=>   $request->subject,
            'message'=> $request->message,
            'image'=>   $new_name

        );
        Contact::whereId($id)->update($form_data);
        return redirect('contact')->with('success', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $data = Contact::findOrFail($id);
        $data->delete();
        return redirect('contact.index')->with('success', 'Data is successfully deleted');
    }
}
