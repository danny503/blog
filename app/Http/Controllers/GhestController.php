<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class GhestController extends Controller
{
    public function index(){
        //dd('GuestController');
        $entries = Entry::with('user')
        ->orderByDesc('created_at')
        ->orderByDesc('id')
        ->paginate(10);
        return view('welcome')->with(compact('entries'));        
    }
    public function show(Entry $entryBySlug){
        return view('entries.show', [
            'entry' => $entryBySlug
        ]);
    }
}
