<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function SuperCategory()
    {
        return $this->belongsTo(SuperCategory::class);
    }

    public function SubCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function Likes()
    {
        return $this->belongsToMany(User::class, 'post_users');
    }

    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }
}
