<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class EntryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('entries.create');
    }
    public function store(Request $request){
        //dd($request->all());

        //Validaciones
       $validateData = $request->validate([
            'title' => 'required|min:7|max:255|unique:entries',
            'content' => 'required|min:25|max:3000'
        ]);

        $entry = new Entry();
        $entry->title = $validateData['title'];
        $entry->content = $validateData['content'];
        $entry->user_id = auth()->id();
        $entry->save();//INSERT 

        $status = 'Tu entrada ha sido publicada exitosamente';
        return back()->with(compact('status'));
        
    }
    public function edit(Entry $entry){
        return view('entries.edit',compact('entry'));
    }

    public function update(Request $request, Entry $entry){
        //dd($request->all());

        //Validaciones
       $validateData = $request->validate([
            'title' => 'required|min:7|max:255|unique:entries,id,'.$entry->id,
            'content' => 'required|min:25|max:3000'
        ]);

        //Permitir editar solo al autor
        $entry->title = $validateData['title'];
        $entry->content = $validateData['content'];
        $entry->save();//INSERT 

        $status = 'Tu entrada ha sido actualizada exitosamente';
        return back()->with(compact('status'));
        
    }
}

