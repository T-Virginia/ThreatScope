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
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
