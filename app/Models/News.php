<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image_id', 'category_id'];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function contents()
    {
        return $this->hasMany(NewsContent::class);
    }

    public function contentTypes()
    {
        return $this->belongsToMany(NewsContentType::class, 'news_contents', 'news_id', 'news_content_type_id');
    }
}
