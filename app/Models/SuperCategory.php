<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Categories()
    {
        return $this->hasMany(Category::class, 'categories');
    }

    public function Posts()
    {
        return $this->hasMany(Post::class);
    }
}
