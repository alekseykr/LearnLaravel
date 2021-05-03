<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $table = 'posts';
    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
    protected $guarded=[];
}
