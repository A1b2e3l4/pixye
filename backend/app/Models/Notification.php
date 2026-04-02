<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['type', 'data', 'read_at'];

    const TYPES = [
        'match' => 'Match Notification',
        'message' => 'Message Notification',
        'like' => 'Like Notification',
        'subscription' => 'Subscription Notification',
        'payment' => 'Payment Notification',
        'system' => 'System Notification',
    ];

    public function markAsRead() {
        $this->read_at = now();
        $this->save();
    }

    public function getIcon() {
        switch ($this->type) {
            case 'match': return 'icon-match.svg';
            case 'message': return 'icon-message.svg';
            case 'like': return 'icon-like.svg';
            case 'subscription': return 'icon-subscription.svg';
            case 'payment': return 'icon-payment.svg';
            case 'system': return 'icon-system.svg';
            default: return 'icon-default.svg';
        }
    }

    public function getTypeLabel() {
        return self::TYPES[$this->type] ?? 'Unknown Type';
    }

    public function getTimeAgo() {
        return $this->created_at->diffForHumans();
    }
}