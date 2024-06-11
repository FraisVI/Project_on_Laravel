<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags', 'tags_id', 'post_id');
    }

}
