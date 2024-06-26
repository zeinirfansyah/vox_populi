<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'message_sender',
        'message_title', 
        'message_content',
        'status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
