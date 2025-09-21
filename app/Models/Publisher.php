<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact_person',
        'phone',
        'company',
        'address',
        'country',
        'currency',
        'balance',
        'status',
        'traffic_sources',
        'settings',
    ];

    protected $casts = [
        'balance' => 'decimal:2',
        'traffic_sources' => 'array',
        'settings' => 'array',
    ];

    /**
     * Get the campaigns for the publisher.
     */
    public function campaigns(): HasMany
    {
        return $this->hasMany(Campaign::class);
    }
}
