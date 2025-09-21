<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CampaignEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'event_type',
        'event_id',
        'user_id',
        'session_id',
        'ip_address',
        'user_agent',
        'referrer',
        'landing_page',
        'geo_location_id',
        'device_id',
        'revenue',
        'cost',
        'custom_data',
        'event_time',
    ];

    protected $casts = [
        'revenue' => 'decimal:2',
        'cost' => 'decimal:2',
        'custom_data' => 'array',
        'event_time' => 'datetime',
    ];

    /**
     * Get the campaign that owns the event.
     */
    public function campaign(): BelongsTo
    {
        return $this->belongsTo(Campaign::class);
    }

    /**
     * Get the geo location for the event.
     */
    public function geoLocation(): BelongsTo
    {
        return $this->belongsTo(GeoLocation::class);
    }

    /**
     * Get the device for the event.
     */
    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }
}
