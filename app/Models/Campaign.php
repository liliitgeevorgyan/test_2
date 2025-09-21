<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'advertiser_id',
        'publisher_id',
        'offer_id',
        'name',
        'description',
        'campaign_id',
        'status',
        'start_date',
        'end_date',
        'budget',
        'daily_budget',
        'bid_amount',
        'currency',
        'targeting_rules',
        'tracking_params',
        'landing_page_url',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'budget' => 'decimal:2',
        'daily_budget' => 'decimal:2',
        'bid_amount' => 'decimal:2',
        'targeting_rules' => 'array',
        'tracking_params' => 'array',
    ];

    /**
     * Get the advertiser that owns the campaign.
     */
    public function advertiser(): BelongsTo
    {
        return $this->belongsTo(Advertiser::class);
    }

    /**
     * Get the publisher that owns the campaign.
     */
    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    /**
     * Get the offer that owns the campaign.
     */
    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }

    /**
     * Get the events for the campaign.
     */
    public function events(): HasMany
    {
        return $this->hasMany(CampaignEvent::class);
    }

    /**
     * Get the metrics for the campaign.
     */
    public function metrics(): HasMany
    {
        return $this->hasMany(CampaignMetric::class);
    }
}
