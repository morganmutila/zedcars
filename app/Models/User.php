<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
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

    // Check which fields have been filled out and return a percentage
    public function profileProgress(): array
    {
        $fields = [
            'name'  => 'Add your name',
            'email' => 'Add your email',
            // 'phone' => 'Add your phone number',
            // 'address' => 'Add your address',
            // 'dob' => 'Add your date of birth',
            'email_verified_at' => 'Verify your email',
        ];

        $filled = 0;
        $missing = [];

        foreach ($fields as $field => $label) {
            if (!empty($this->{$field})) {
                $filled++;
            } else {
                $missing[] = $label;
            }
        }

        $percentage = round(($filled / count($fields)) * 100);

        return [
            'percentage' => $percentage,
            'missing' => $missing
        ];
    }

}
