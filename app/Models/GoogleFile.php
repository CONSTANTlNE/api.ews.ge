<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GoogleFile extends Model
{
    protected $guarded=[];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function driveFolder(): BelongsTo
    {
        return $this->belongsTo(DriveFolder::class);
    }
}
