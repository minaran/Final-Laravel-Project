<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'body',
        'category_id',
        'user_id',
        'slug'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
