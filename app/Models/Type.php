<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Type extends Model
{
    use HasFactory;
    
    protected $fillable = ['type'];

    public function project(): BelongsTo {
        
        return $this->BelongsTo(Project::class);
    }
}
