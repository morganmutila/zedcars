<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'location',
        'phone',
        'bio',
        'avatar',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function getAvatarAttribute($value)
    {
        $path = "assets/img/account/avatar.svg";
        return $value ?: $path;
    }
}
