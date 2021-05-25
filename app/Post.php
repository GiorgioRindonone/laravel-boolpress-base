<?php

namespace App;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    //crea una funzione comment che quando la richiamo mi restituisce la relazione
    public function comment() {
        //la relazione è che un post può avere più commenti
        return $this->hasMany('App\Comment');
    }

}
