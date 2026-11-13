<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class ThreatLookup extends Model
{
    protected $fillable = [
        'ip_address',
        'abuse_confidence_score',
        'total_reports',
        'country_code',
        'isp',
        'ip_version',
        'is_white_listed',
        'country_name',
        'usage_type',
        'is_tor',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
