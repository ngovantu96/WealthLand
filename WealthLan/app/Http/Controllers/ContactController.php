<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('home.contact.list',compact('contacts'));
    }
    public function store(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->comment = $request->comment;
        $contact->save();
        return redirect()->route('')->with('add','Gửi thành công.');
    }
    public function delete($id){
        Contact::where('id',$id)->delete();
        return redirect()->route('contact.list')->with('delete','delete success');
    }
}
