<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{   
    use HasFactory;

    const status_draft = 'draft';
    const status_publish = 'publish';

    public static function boot() 
    {
        parent::boot();

        static::creating(function ($article) {
            $article->user_id = auth()->user()->id;
            $article->slug = Str::slug($article->title);
        });

        static::updating(function ($article) {
            $article->slug = Str::slug($article->title);
        });
        
    }
}
