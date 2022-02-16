<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    /*
     * Get the comments for the blog post.
     */
    function comments() {
        return $this->hasMany('App\Models\Comment');
        ;
    }
    /*
     * Get the category that owns the blog post.
     */    
    function category() {
        return $this->belongsTo('App\Models\Category');
        ;
    }
    /*
     * Get the user that owns the blog post.
     */
    function user() {
        return $this->belongsTo('App\Models\User');
        ;
    }
 
}
