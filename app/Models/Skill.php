<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'percentage', 'icon'];

    protected $casts = [
        'percentage' => 'integer',
    ];

    // Scope untuk filter kategori
    public function scopeFrontend($query)
    {
        return $query->where('category', 'frontend');
    }

    public function scopeDesign($query)
    {
        return $query->where('category', 'design');
    }
}