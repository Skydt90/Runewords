<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Rune extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'image', 'attributes', 'level'
    ];

    protected $hidden = ['pivot'];

    public function runewords(): BelongsToMany
    {
        return $this->belongsToMany(Runeword::class, 'rune_runeword_pivot', 'rune_id', 'runeword_id');
    }

    public function rune_recipe(): BelongsTo
    {
        return $this->belongsTo(RuneRecipe::class);
    }
}
