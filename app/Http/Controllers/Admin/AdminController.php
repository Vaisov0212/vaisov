<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;


class AdminController extends Controller
{
public function index(){
    return view('admin.');
}



}
