<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title', 'slug', 'description', 'image', 
        'technologies', 'project_url', 'github_url', 'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // Accessor untuk technologies sebagai array
    public function getTechnologiesArrayAttribute()
    {
        return explode(',', $this->technologies);
    }
}