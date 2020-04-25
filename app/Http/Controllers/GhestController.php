<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class GhestController extends Controller
{
    public function index(){
        //dd('GuestController');
        $entries = Entry::paginate(10);
        return view('welcome')->with(compact('entries'));
    }
}
