<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gem extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'image'
    ];

    public function recipe(): BelongsTo
    {
        return $this->belongsTo(RuneRecipe::class);
    }
}
