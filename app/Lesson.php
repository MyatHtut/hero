<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['name', 'body'];
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
