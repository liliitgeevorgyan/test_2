<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GeoLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_code',
        'country_name',
        'region_code',
        'region_name',
        'city',
        'timezone',
        'latitude',
        'longitude',
    ];

    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
    ];

    /**
     * Get the campaign events for the geo location.
     */
    public function campaignEvents(): HasMany
    {
        return $this->hasMany(CampaignEvent::class);
    }

    /**
     * Get the campaign metrics for the geo location.
     */
    public function campaignMetrics(): HasMany
    {
        return $this->hasMany(CampaignMetric::class);
    }
}
