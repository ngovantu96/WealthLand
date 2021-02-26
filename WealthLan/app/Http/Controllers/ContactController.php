<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Partner;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('home.contact.list',compact('contacts'));
    }

    public function store(Request $request){
        $customer = new Contact();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->comments = $request->comments;
        $customer->save();
        
    }

    public function delete($id){
        Contact::where('id',$id)->delete();
        return redirect()->route('contact.list')->with('delete','delete success');
    }

    public function contact(){
        $listLands = Category::all();
        $partners = Partner::all();
        return view('page.contact',compact('listLands','partners'));
    }
}
