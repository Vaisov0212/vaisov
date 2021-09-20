<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class FeedbackController extends Controller
{

  
        public function index(){
            $contacts=Contact::orderBy('id','desc')->paginate(15);
            $links=$contacts->links();
            $report=Contact::where('report','==',true)->count();
            
            return view('admin.feedback.index',compact('contacts','links','report'));
        }

        public function show($id){
            $feedback=Contact::findOrFail($id);
            $feedback->update([
                'report'=>true
            ]);
            $report=Contact::where('report','==',true)->count();
            return view('admin.feedback.show', compact('feedback','report'));
        }

        public function update(Request $request,$id){

        }

        public function destroy($id){
        $contact=Contact::findOrFail($id);
        $contact->delete();
        return route()->redirect()->back()->with('delete','O`chirildi !');
    
    }
    
}
