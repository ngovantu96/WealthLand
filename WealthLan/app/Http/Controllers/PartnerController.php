<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public  function index(){
        $partners = Partner::all();
        return view('home.partner.list',compact('partners'));
    }
    public function create(){
        return view('home.partner.create');
    }
    public function store(Request $request){
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->title = $request->title;
        $partner->description = $request->description;
        $partner->save();
        return redirect()->route('partner.list')->with('add','add successful!!');
    }
    public function edit($id){
        $partner = Partner::findOrFail($id);
        return view('home.partner.edit',compact('partner'));
    }
    public function update(Request $request,$id){
        $partner = Partner::findOrFail($id);
        $partner->name = $request->name;
        $partner->title = $request->title;
        $partner->description = $request->description;

        $partner->save();
        return redirect()->route('partner.list')->with('update','update successful!!!');
    }
    public function delete($id){
        Partner::where('id',$id)->delete();
        return redirect()->route('partner.list')->with('delete','delete successful!!!');;
    }
}
