<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'photos', 
        'posts_id'
    ];

    protected $hidden = [];

    public function post()
    {
        return $this->belongsTo(Post::class, 'posts_id', 'id');
    }
}
