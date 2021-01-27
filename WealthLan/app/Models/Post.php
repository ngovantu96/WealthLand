<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public $timestamps = false;
    protected $fillable = [
        'title',
        'new_post_id',
        'content',
        'image',
        'user_id',
    ];

    public function newpost(){
        return $this->belongsTo(NewPost::class,'new_post_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    function getImage(){
        return "https://tungoc8.s3.amazonaws.com/".$this->image;
    }
}
