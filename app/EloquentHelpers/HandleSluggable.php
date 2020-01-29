<?php

namespace App\EloquentHelpers;

trait HandleSluggable
{
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}