<?php

namespace App\Models;

use App\Http\Controllers\HotLand;
use App\Http\Controllers\StatusConst;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;
    protected $table = 'lands';



    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    function getImage(){
        return "https://tungoc8.s3.amazonaws.com/".$this->image;
    }

    public function hot()
    {
        if ($this->hot == HotLand::HOT) {
            return "Hot";
        } elseif ($this->status == HotLand::NEW) {
            return "Mới";
        }
    }

    public function Badge()
    {
        if($this->status == HotLand::HOT){
            return "badge-secondary";
        }elseif ($this->status == HotLand::NEW){
            return "badge-info";
        }
    }

    public function status(){
        if ($this->status == StatusConst::WAITING) {
            return "Đang Chờ KHởi Công";
        } elseif ($this->status == StatusConst::SUCCESS) {
            return "Đã Hoàn Thành";
        }elseif ($this->status == StatusConst::CANCEL) {
            return "Đã Hủy Dự Án ";
        }
    }

}
