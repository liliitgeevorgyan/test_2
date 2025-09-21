<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'advertiser_id',
        'name',
        'description',
        'category',
        'type',
        'payout',
        'currency',
        'status',
        'start_date',
        'end_date',
        'daily_cap',
        'total_cap',
        'targeting',
        'creative_assets',
        'tracking_url',
    ];

    protected $casts = [
        'payout' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date',
        'targeting' => 'array',
        'creative_assets' => 'array',
    ];

    /**
     * Get the advertiser that owns the offer.
     */
    public function advertiser(): BelongsTo
    {
        return $this->belongsTo(Advertiser::class);
    }

    /**
     * Get the campaigns for the offer.
     */
    public function campaigns(): HasMany
    {
        return $this->hasMany(Campaign::class);
    }
}
