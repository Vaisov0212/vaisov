<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contact;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        $rules=[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ];
        $validator=Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json([
                'status'=> false,
                'data'=>$validator->errors()
            ]);
        }
        $contact=new Contact([
            'name'=>$request->post('name'),
            'email'=>$request->post('email'),
            'subject'=>$request->post('subject'),
            'message'=>$request->post('message'),
            'report'=>false
        ]);
        $contact->save();
        return response()->json([
            'status'=> true,
            'data'=>'Xabar yuborildi !'
        ]);
    }

    public function switchLang($lang){
        session()->put('lang', $lang);
        return redirect()->back();

    }
}
