<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $table = 'category';
    public function posts(){
        return $this->hasMany(Post::class,'category_id','id');
    }
}
