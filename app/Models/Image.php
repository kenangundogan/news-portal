<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image1x1', 'image1x2', 'image16x9'];

    public function news()
    {
        return $this->hasOne(News::class);
    }
}
