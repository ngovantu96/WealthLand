<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';


    function getImage(){
        return "https://tungoc8.s3.amazonaws.com/".$this->image;
    }
}
