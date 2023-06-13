<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'img_path', 'programming_language', 'overview', 'link_code', 'link_website','type_id'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }

    public function types(): HasMany {

        return $this->hasMany(Type::class);
    }

    public function technologies() : BelongsToMany {
        return $this->belongsToMany(Technology::class);
    }
}
