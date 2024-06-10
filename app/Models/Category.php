<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function SuperCategory()
    {
        return $this->belongsTo(SuperCategory::class, 'super_id');
    }

    public function SubCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function Posts()
    {
        return $this->hasMany(Post::class);
    }
}
