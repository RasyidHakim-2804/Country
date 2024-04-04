<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regions';

    public function subregions(): HasMany
    {
        return $this->hasMany(Subregion::class, 'region_id');
    }

    public function countries(): HasMany
    {
        return $this->hasMany(Country::class, 'region_id');
    }
}