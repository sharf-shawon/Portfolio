<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    public function getNextPostAttribute()
    {
        return Post::where('active', true)->where('id', '>', $this->id)->orderBy('id', 'asc')->first();
    }
    public function getPrevPostAttribute()
    {
        return Post::where('active', true)->where('id', '<', $this->id)->orderBy('id', 'desc')->first();
    }
}
