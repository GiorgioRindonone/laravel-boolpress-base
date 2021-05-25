<?php

namespace App;
use App\Post;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function post() {
        return $this->belongsTo('App\Post');
    }

}
