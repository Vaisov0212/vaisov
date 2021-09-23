<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chat;
use App\Contact;
class AdminbotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $chats=Chat::orderBy('id','desc')->paginate(20);
        $links=$chats->links();
        $report=Contact::where('report','==',true)->count();
        return view('admin.bot.index', compact('report','chats','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $report=Contact::where('report','==',true)->count();
        return view('admin.bot.create',compact('report'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'question'=>'required|max:200',
            'respond'=>'required|max:200'
        ]);

        $chat=new Chat([
            'question'=>$request->get('question'),
            'respond'=>$request->get('respond')
        ]);
        $chat->save();
        return redirect()->back()->with('success','malumot qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $chat=Chat::findOrFail($id);
        $chat->delete();
        return redirect()->back()->with('delete','Malumot o`chirildi !');
    }

}
