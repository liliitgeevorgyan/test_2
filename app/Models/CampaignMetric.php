<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CampaignMetric extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'geo_location_id',
        'device_id',
        'date',
        'hour',
        'impressions',
        'clicks',
        'conversions',
        'installs',
        'registrations',
        'sales',
        'revenue',
        'cost',
        'profit',
        'ctr',
        'conversion_rate',
        'cpc',
        'cpa',
        'roi',
        'roas',
    ];

    protected $casts = [
        'date' => 'date',
        'revenue' => 'decimal:2',
        'cost' => 'decimal:2',
        'profit' => 'decimal:2',
        'ctr' => 'decimal:4',
        'conversion_rate' => 'decimal:4',
        'cpc' => 'decimal:4',
        'cpa' => 'decimal:4',
        'roi' => 'decimal:4',
        'roas' => 'decimal:4',
    ];

    /**
     * Get the campaign that owns the metric.
     */
    public function campaign(): BelongsTo
    {
        return $this->belongsTo(Campaign::class);
    }

    /**
     * Get the geo location for the metric.
     */
    public function geoLocation(): BelongsTo
    {
        return $this->belongsTo(GeoLocation::class);
    }

    /**
     * Get the device for the metric.
     */
    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }
}
