<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['tags'];
    //crea una funzione comment che quando la richiamo mi restituisce la relazione

    public function comments()
    {
        //la relazione è che un post può avere più commenti
        return $this->hasMany('App\Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
