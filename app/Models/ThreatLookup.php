<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ThreatLookup extends Model
{
    protected $fillable = ['ip_address'];

    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }
}
