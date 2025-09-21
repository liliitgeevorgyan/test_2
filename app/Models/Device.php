<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_type',
        'os',
        'os_version',
        'browser',
        'browser_version',
        'brand',
        'model',
        'screen_resolution',
        'is_mobile',
        'is_tablet',
        'is_desktop',
    ];

    protected $casts = [
        'is_mobile' => 'boolean',
        'is_tablet' => 'boolean',
        'is_desktop' => 'boolean',
    ];

    /**
     * Get the campaign events for the device.
     */
    public function campaignEvents(): HasMany
    {
        return $this->hasMany(CampaignEvent::class);
    }

    /**
     * Get the campaign metrics for the device.
     */
    public function campaignMetrics(): HasMany
    {
        return $this->hasMany(CampaignMetric::class);
    }
}
