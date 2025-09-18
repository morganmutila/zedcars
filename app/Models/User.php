<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'facebook_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    // Check which fields have been filled out and return a percentage
    public function profileProgress(): array
    {
        $userFields = [
            'name' => 'Add your name',
            'email' => 'Add your email',
            'email_verified_at' => 'Verify your email',
        ];

        $profileFields = [
            'phone' => 'Add your phone number',
            'location' => 'Add your location',
            'avatar' => 'Upload your avatar',
            'bio' => 'Add your bio',
        ];

        $filled = 0;
        $missing = [];
        $totalFields = count($userFields) + count($profileFields);

        // Check user fields
        foreach ($userFields as $field => $label) {
            if (!empty($this->{$field})) {
                $filled++;
            } else {
                $missing[] = $label;
            }
        }

        // Check profile fields
        $profile = $this->profile;
        foreach ($profileFields as $field => $label) {
            if ($profile && !empty($profile->{$field})) {
                $filled++;
            } else {
                $missing[] = $label;
            }
        }

        $percentage = round(($filled / $totalFields) * 100);

        return [
            'percentage' => (int) $percentage,
            'missing' => $missing,
            'filled' => $filled,
            'total' => $totalFields
        ];
    }

    // Accessor to get profile location directly from user
    public function getLocationAttribute()
    {
        return $this->profile?->location;
    }

    // Accessor to get profile phone directly from user
    public function getPhoneAttribute()
    {
        return $this->profile?->phone;
    }

    // Accessor to get profile bio directly from user
    public function getBioAttribute()
    {
        return $this->profile?->bio;
    }

    // Accessor to get profile avatar directly from user
    public function getAvatarAttribute()
    {
        return $this->profile?->avatar;
    }

}
