<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = ['title', 'team', 'duration', 'description', 'slug_title'];

    use HasFactory;

    public static function generate_slug($title)
    {
        $slug_title = Str::slug($title);

        return $slug_title;
    }
}
