<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Advertiser extends Model
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
        'settings',
    ];

    protected $casts = [
        'balance' => 'decimal:2',
        'settings' => 'array',
    ];

    /**
     * Get the offers for the advertiser.
     */
    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class);
    }

    /**
     * Get the campaigns for the advertiser.
     */
    public function campaigns(): HasMany
    {
        return $this->hasMany(Campaign::class);
    }
}
