<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //protected $fillable = ['title','content'];
    //Entry N - 1 user
    //Eager loading
    public function user(){
        return $this->belongsTo(User::class);
    }
}
