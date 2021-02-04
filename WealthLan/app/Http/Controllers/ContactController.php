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

    public function delete($id){
        Contact::where('id',$id)->delete();
        return redirect()->route('contact.list')->with('delete','delete success');
    }
    public function contact(){
        return view('page.contact');
    }
}
