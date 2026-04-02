<?php

namespace App\Models;

class Plan
{
    const TIERS = [
        'Free' => [
            'price' => 0,
            'features' => ['Basic support', 'Limited storage'],
            'tier_info' => 'Entry level tier for users to try out our service.'
        ],
        'Bronze' => [
            'price' => 1000,
            'features' => ['Email support', '1GB storage'],
            'tier_info' => 'Affordable tier with essential features.'
        ],
        'Silver' => [
            'price' => 2500,
            'features' => ['Priority email support', '5GB storage', 'Access to basic analytics'],
            'tier_info' => 'Mid-range tier for growing users.'
        ],
        'Gold' => [
            'price' => 5000,
            'features' => ['24/7 support', '20GB storage', 'Advanced analytics'],
            'tier_info' => 'Premium support and features for serious users.'
        ],
        'Diamond' => [
            'price' => 10000,
            'features' => ['Dedicated support', '100GB storage', 'Custom analytics solutions'],
            'tier_info' => 'Exclusive features for top-tier customers.'
        ],
    ];

    public static function getAllTiers() {
        return self::TIERS;
    }
}
