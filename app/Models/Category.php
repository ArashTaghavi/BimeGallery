<?php

namespace App\Models;

use App\EloquentHelpers\HandleSluggable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = ['title'];


    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('created_at', 'ASC');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
