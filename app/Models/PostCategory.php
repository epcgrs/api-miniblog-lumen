<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model {
    protected $table = 'posts_categories';
    protected $fillable = [ 'post_id', 'category_id' ];
    protected $hidden = [ ];
}
