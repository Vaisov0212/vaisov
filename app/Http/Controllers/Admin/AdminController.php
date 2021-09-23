<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;


class AdminController extends Controller
{

    public function index(){

        $report=Contact::where('report','==',true)->count();
        return view('admin.index', compact('report'));
    }


    


}
