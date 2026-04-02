<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'reporter_id',
        'reported_user_id',
        'reason',
        'description',
        'evidence',
        'status',
        'action_taken',
        'resolved_by',
        'resolved_at',
    ];

    protected $casts = [
        'evidence' => 'array',
        'resolved_at' => 'datetime',
    ];

    const STATUS_PENDING = 'pending';
    const STATUS_RESOLVED = 'resolved';
    const STATUS_DISMISSED = 'dismissed';

    // Define any relationships or methods as needed here.
}
