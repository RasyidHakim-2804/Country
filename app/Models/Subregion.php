<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subregion extends Model
{
    use HasFactory;

    protected $table = 'subregions';

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function countries(): HasMany
    {
        return $this->hasMany(Country::class, 'subregion_id');
    }
}
