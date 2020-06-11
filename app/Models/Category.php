<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $table = 'categories';
    protected $fillable = [ 'title' ];
    protected $hidden = [ ];

    public function posts()
    {
        return $this->belongsToMany('App\Models\Posts', 'posts_categories', 'category_id', 'post_id');
    }
}
