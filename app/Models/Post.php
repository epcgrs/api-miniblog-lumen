<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {
    use SoftDeletes;

    protected $table = 'posts';
    protected $fillable = [ 'title', 'content', 'image' ];
    protected $hidden = [ ];
    protected $casts = [
        'created_at'  => 'date:d/m/Y',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'posts_categories', 'post_id', 'category_id');
    }
}
