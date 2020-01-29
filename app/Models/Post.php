<?php

namespace App\Models;

use App\EloquentHelpers\HandleSluggable;
use App\EloquentHelpers\HasImage;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasImage;
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public $image_path = 'post-image';

    protected $fillable = ['title', 'description', 'category_id', 'url'];



    public function scopeVideo($query)
    {
        return $query->where('is_video', 1);
    }

    public function scopeImage($query)
    {
        return $query->where('is_video', 0);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
