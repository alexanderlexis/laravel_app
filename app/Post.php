<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $primaryKey = 'post_id';

    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key', 'user_id');
    }
}
