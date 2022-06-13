<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Runeword extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'image', 'attributes', 'level', 'item_type', 'ladder_only'
    ];

    public function runes(): BelongsToMany
    {
        return $this->belongsToMany(Rune::class, 'rune_runeword_pivot', 'runeword_id', 'rune_id')
            ->withPivot('priority')->orderBy('priority');
    }
}
