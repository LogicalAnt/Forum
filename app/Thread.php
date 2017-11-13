<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    /*
     * Return a thread's path
     *
     *  we can fetch a Thread path by calling this method
     *  we don't wanna write the path always.
     */
    
    protected $fillable=[ 'title', 'body', 'user_id'];

    public function path()
    {
        return '/threads/'. $this->id;
    }

    public function replies()
    {
        return $this->hasMany(Reply::class)->with('owner');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
