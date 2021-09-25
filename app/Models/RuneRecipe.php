<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class RuneRecipe extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'image', 'rune_count'
    ];

    public function runes(): HasMany
    {
        return $this->hasMany(Rune::class);
    }

    public function gem(): HasOne
    {
        return $this->hasOne(Gem::class);
    }
}
