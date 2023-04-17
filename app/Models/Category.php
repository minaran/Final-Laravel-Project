<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $table = 'categories';  //moglo je ovako, ali cu u HomeControlleru da definisem

    protected $fillable = [
    'name'
    
];
public function posts(){
    return $this->hasMany(Post::class);
}

public function tasks(){
    return $this->hasMany(Task::class);
}
}
