<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'slug', 'excerpt', 'body','type','featured_image', 'is_published'];

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getImageUrlAttribute()
    {
        return $this->featured_image ? asset('storage/'.$this->featured_image) : null;
    }

    public function getPublishedDateAttribute()
    {
        return $this->created_at->format('M d, Y');
    }

    public function getReadingTimeAttribute()
    {
        $words = str_word_count(strip_tags($this->body));
        $minutes = round($words / 200);

        return $minutes.' min read';
    }

    public function categories()
    {
        return $this->hasMany(PostCategory::class, 'post_id');
    }

    public function getUrlAttribute()
    {
        return route('blog', $this);
    }
}
