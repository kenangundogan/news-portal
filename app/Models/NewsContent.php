<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsContent extends Model
{
    use HasFactory;

    protected $fillable = ['news_id', 'news_content_type_id', 'content'];

    public function contentType()
    {
        return $this->belongsTo(NewsContentType::class, 'news_content_type_id');
    }
}
