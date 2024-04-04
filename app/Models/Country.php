<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function subregion(): BelongsTo 
    {
        return $this->belongsTo(Subregion::class, 'subregion_id');    
    }

    public function states(): HasMany
    {
        return $this->hasMany(State::class, 'country_id');
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
    
}
