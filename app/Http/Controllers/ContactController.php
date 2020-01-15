<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Contact;
use App\Clien;

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
            ]);
        $form_data = array(
            'name'=>   $request->name,
            'email'=> $request->email,
            'subject'=>   $request->subject,
            'message'=> $request->message,
        );
        Contact::create($form_data);
        return redirect('contacts')->with('success', 'Data Added successfully.');
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
            ]);
            }
        else
        {
            $request->validate([
                'name' =>  'required',
                'email'=> 'required',
                'subject'=>   'required',
                'message'=> 'required',
            ]);
        }
        $form_data = array('name'=>   $request->name,
            'name'=> $request->name,
            'email'=> $request->email,
            'subject'=>   $request->subject,
            'message'=> $request->message,

        );
        Contact::whereId($id)->update($form_data);
        return redirect('contact')->with('success', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('contact')->where('id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('contact.index')->with('success', 'Data is successfully deleted');
    }
}
