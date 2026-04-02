<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    // Fillable attributes in the Ad model
    protected $fillable = [
        'media_type', // type of media: image or video
        'media_path', // path to the media file
        'plan_tier',  // targeting by plan tier
        'frequency_control', // frequency control for ad display
        'impressions_tracking', // to track impressions
        'click_tracking', // to track clicks
        'is_active', // boolean for enabling/disabling the ad
    ];

    // Define constants for media types
    const MEDIA_IMAGE = 'image';
    const MEDIA_VIDEO = 'video';

    // Method to scope active ads
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Additional methods for the Ad model can be added here
}
