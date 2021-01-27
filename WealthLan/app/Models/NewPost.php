<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewPost extends Model
{
    use HasFactory;
    protected  $table='new_posts';

    public function posts(){
        return $this->hasMany(Post::class,'new_post_id');
    }
}
