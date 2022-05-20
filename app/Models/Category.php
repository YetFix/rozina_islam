<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table= 'categories';

  
    public function news(){
        return $this->hasMany(News::class);
    }
    public function blogs(){
        return $this->hasMany(Blog::class);
    }
}
